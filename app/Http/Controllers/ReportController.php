<?php

namespace App\Http\Controllers;

use App\Enums\ReportAction;
use App\Enums\ReportType;
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
}
