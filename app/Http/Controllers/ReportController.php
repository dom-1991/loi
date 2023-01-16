<?php

namespace App\Http\Controllers;

use App\Enums\ReportAction;
use App\Enums\ReportType;
use App\Enums\UserStatus;
use App\Http\Requests\ReportSaveOutRequest;
use App\Models\Report;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function out ()
    {
        $types = ReportType::getLabel();
        $employs = User::pluck('name', 'id')->toArray();
        $employs = ['' => '--'] + $employs;
        return view('reports.out', compact('types', 'employs'));
    }

    public function saveOut(ReportSaveOutRequest $request)
    {
        $imageUrl = '';
        if ($request->image) {
            $imageName = Storage::put('public/avatar', $request->image);
            $imageUrl = asset(str_replace('public/', 'storage/', $imageName));
        }

        Report::create([
           'type' => $request->type,
           'amount' => $request->amount,
           'note' => $request->note,
           'employ_id' => $request->employ_id,
           'user_id' => auth()->id(),
           'action' => ReportAction::SUB,
           'image' => $imageUrl,
           'date' => Carbon::createFromFormat('d/m/Y', $request->date),
        ]);
        return redirect()->route('homepage');
    }

    public function in ()
    {
        return view('reports.in');
    }

    public function saveIn(ReportSaveOutRequest $request)
    {
        $imageUrl = '';
        if ($request->image) {
            $imageName = Storage::put('public/avatar', $request->image);
            $imageUrl = asset(str_replace('public/', 'storage/', $imageName));
        }

        Report::create([
            'type' => null,
            'amount' => $request->amount,
            'note' => $request->note,
            'employ_id' => null,
            'user_id' => auth()->id(),
            'action' => ReportAction::ADD,
            'image' => $imageUrl,
            'date' => Carbon::createFromFormat('d/m/Y', $request->date),
        ]);
        return redirect()->route('homepage');
    }

    public function today ()
    {
        $now = Carbon::now();
        $daysInMonth = $now->daysInMonth;
        $salary = User::where('status', UserStatus::ACTIVE)->sum('salary');
        $sub = round($salary / $daysInMonth, 0);
        $add = Report::where('date', $now->format('Y-m-d'))->where('action', ReportAction::ADD)->sum('amount');
        $sub += Report::where('date', $now->format('Y-m-d'))->where('action', ReportAction::SUB)->sum('amount');
        $price = $add - $sub;
        $data = [
            'now' => $now->format('d/m/Y'),
            'price' => $price
        ];

        return view('dashboard', $data);
    }

    public function index (Request $request)
    {
        $fromDate = Carbon::now()->firstOfMonth()->format('Y-m-d');
        $toDate = Carbon::now()->format('Y-m-d');
        if ($request->from_date) {
            $fromDate = Carbon::createFromFormat('d/m/Y', $request->from_date)->format('Y-m-d');
        }

        if ($request->to_date) {
            $toDate = Carbon::createFromFormat('d/m/Y', $request->to_date)->format('Y-m-d');
        }

        $reports = Report::whereBetween('date', [$fromDate, $toDate])->paginate(config('app.paginate'));
        $add = Report::whereBetween('date', [$fromDate, $toDate])->where('action', ReportAction::ADD)->sum('amount');
        $sub = Report::whereBetween('date', [$fromDate, $toDate])->where('action', ReportAction::SUB)->sum('amount');
        $price = $add - $sub;

        $fromDate = Carbon::parse($fromDate)->format('d/m/Y');
        $toDate = Carbon::parse($toDate)->format('d/m/Y');
        return view('reports.index', compact('reports', 'price', 'fromDate', 'toDate'));
    }
}
