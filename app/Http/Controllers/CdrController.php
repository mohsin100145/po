<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Cdr;

class CdrController extends Controller
{
    public function index()
    {
    	$cdrs = Cdr::orderBy('id', 'desc')->get();

    	return view('cdr.index', compact('cdrs'));
    }

    public function reportForm()
    {
    	return view('cdr.report_form');
    }

    public function reportShow(Request $request)
    {
    	$startDate = $request->start_date;
    	$endDate = $request->end_date;
    	$startDateTime = $request->start_date . " 00:00:00";
    	$endDateTime = $request->end_date . " 23:59:59";
    	$cdrs = Cdr::whereBetween('calldate', [$startDateTime, $endDateTime])->orderBy('id', 'desc')->get();

    	return view('cdr.report_show', compact('cdrs', 'startDate', 'endDate'));
    }
}
