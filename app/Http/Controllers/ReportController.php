<?php

namespace App\Http\Controllers;

use App\Enums\ReportType;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function out ()
    {
        $types = ReportType::getLabel();
        return view('reports.out', compact('types'));
    }

    public function in ()
    {
        return view('reports.in');
    }
}
