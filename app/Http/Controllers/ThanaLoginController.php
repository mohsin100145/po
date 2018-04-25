<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Phone;
use Session;

class ThanaLoginController extends Controller
{
    public function index(Request $request)
    {
    	//return $request->all();
    	$phone = Phone::where('username', $request->phone_extension)->where('secret', $request->phone_password)->first();
    	if(count($phone) < 1)
    	{
    		flash()->error('Username & password not match');
            return redirect()->back()->withInput();
    	}
    	Session::set('variableName', $phone->id);
    	echo Session::get('variableName');

    	//Session()->flush();
    	//echo Session::get('variableName');
    }
}
