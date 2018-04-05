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
}
