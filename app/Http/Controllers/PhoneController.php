<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Phone;
use App\Models\Division;
use App\Models\District;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class PhoneController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$phones = Phone::with('district')->orderBy('id', 'desc')->get();
        return view('phone.index', compact('phones'));
    }

    public function create()
    {
        $divisionList = Division::pluck('name', 'id');
    	return view('phone.create', compact('divisionList'));    
    }

    public function store(Request $request)
    {
    	$username = $request->username;
    	$secret = $request->secret;
    	$accountcode = $username;
    	$callerid = '"" <' . $username . '>';
    	$mailbox = $username;
    	$context = "devlocal";
    	$type = "friend";
    	$host = "dynamic";
    	$policeStation = $request->police_station;

    	$input = Input::all();
	    $rules = [
	    	'username' => 'required|unique:phones',
	    	'secret' => 'required',
	    	'police_station' => 'required|unique:phones',
            'division_id' => 'required',
            'district_id' => 'required'
	    ];
	    $messages = [
            'username.required' => 'Phone Username field is required.',
            'username.unique' => 'Phone Username already exist.',
            'secret.required' => 'Phone Secret field is required.',
            'police_station.required' => 'Police Station Name field is required.',
            'police_station.unique' => 'Police Station Name already exist.',
            'division_id.required' => 'Division Name field is required.',
            'district_id.required' => 'District Name field is required.'
        ];
	    
    	$validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

    	$search = "[" . $username . "]";
		$string = file_get_contents("/etc/asterisk/sip-myol.conf");
		$string = explode("\n", $string);
		if(in_array($search, $string)) {
			flash()->error('This Phone Extension is Already Exist.');
            return redirect()->back()->withInput();
		}


		$fileSip = fopen("/etc/asterisk/sip-myol.conf", "a+") or die("Unable to open file!");

		$startSip = "[" . $username . "]\n";
		fwrite($fileSip, $startSip);

		$usernameSip = "username=" . $username . "\n";
		fwrite($fileSip, $usernameSip);

		$secretSip = "secret=" . $secret . "\n";
		fwrite($fileSip, $secretSip);

		$accountcodeSip = "accountcode=" . $username . "\n";
		fwrite($fileSip, $accountcodeSip);

		$calleridSip = 'callerid=' . $callerid . "\n";
		fwrite($fileSip, $calleridSip);

		$mailboxSip = "mailbox=" . $username . "\n";
		fwrite($fileSip, $mailboxSip);

		$contextSip = "context=" . $context . "\n";
		fwrite($fileSip, $contextSip);

		$typeSip = "type=" . $type . "\n";
		fwrite($fileSip, $typeSip);

		$hostSip = "host=" . $host . "\n";
		fwrite($fileSip, $hostSip);

		$newLineSip = "\n";
		fwrite($fileSip, $newLineSip);

		fclose($fileSip);


		$fileExten = fopen("/etc/asterisk/extensions-myol.conf", "a+") or die("Unable to open file!");

		$newLineExten = "\n";
		fwrite($fileExten, $newLineExten);

		$answerExten = "exten => " . $username . ",1,Answer()\n";
		fwrite($fileExten, $answerExten);

		$dialExten = "exten => " . $username . ",n,Dial(SIP/" . $username . ",20,lr)\n";
		fwrite($fileExten, $dialExten);

		$hangupExten = "exten => " . $username . ",n,Hangup()\n";
		fwrite($fileExten, $hangupExten);

		fclose($fileExten);


		$phone = new Phone;
        $phone->username = $username;
        $phone->secret = $secret;
        $phone->accountcode = $accountcode;
        $phone->callerid = $callerid;
        $phone->mailbox = $mailbox;
        $phone->context = $context;
        $phone->type = $type;
        $phone->host = $host;
        $phone->police_station = $policeStation;
        $phone->division_id = $request->division_id;
        $phone->district_id = $request->district_id;
        $phone->incharge = $request->incharge;
        $phone->duty_officer = $request->duty_officer;
        $phone->oc = $request->oc;
        $phone->address = $request->address;
        $phone->remarks = $request->remarks;
        $phone->created_by = Auth::id();
        $phone->save();

		flash()->message($username . ' Phone Extension & ' . $policeStation . ' Created Successfully.');
    	return redirect('/phone');
    }

	public function show($id)
    {
        $phone = Phone::find($id);
        return view('phone.show', compact('phone'));
    }

	public function edit($id)
    {
    	$phone = Phone::with('district')->find($id);
        $divisionList = Division::pluck('name', 'id');
    	return view('phone.edit', compact('phone', 'divisionList'));
    }
    
    public function update(Request $request, $id)
    {
    	$username = $request->username;
    	$secret = $request->secret;
    	$accountcode = $username;
    	$callerid = '"" <' . $username . '>';
    	$mailbox = $username;
    	$policeStation = $request->police_station;

    	$phone = Phone::find($id);

    	$input = Input::all();
	    $rules = [
	    	'username' => 'required|unique:phones,username,'.$phone->id,
	    	'secret' => 'required',
	    	'police_station' => 'required|unique:phones,police_station,'.$phone->id,
            'division_id' => 'required',
            'district_id' => 'required'
	    ];
	    $messages = [
            'username.required' => 'Phone Username field is required.',
            'username.unique' => 'Phone Username already exist.',
            'secret.required' => 'Phone Secret field is required.',
            'police_station.required' => 'Police Station Name field is required.',
            'police_station.unique' => 'Police Station Name already exist.',
            'division_id.required' => 'Division Name field is required.',
            'district_id.required' => 'District Name field is required.'
        ];
	    
    	$validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $search = "[" . $username . "]";
		$string = file_get_contents('/etc/asterisk/sip-myol.conf');
		$string = explode("\n", $string);

		if(in_array($search, $string)) {
			$fileSip = '/etc/asterisk/sip-myol.conf';
			$linecount = 0;
			$handle = fopen($fileSip, "r");
			while(!feof($handle)){
			  $line = fgets($handle);
			  $linecount++;
			  if($line == "[" . $phone->username . "]\n") {
			  	break;
			  }
			}
			fclose($handle);

			$lines = file($fileSip);//file in to an array
			//echo $lines[$linecount - 1];

			$filenameSip = "/etc/asterisk/sip-myol.conf"; 
			$fileOpenSip = fopen($filenameSip, "r") or die("Couldn't create new file");  
			$fileReadSip = fread ($fileOpenSip, filesize($filenameSip)); 

			$fileReadSip = explode("\n", $fileReadSip); 
			$fileReadSip[$linecount - 1] = "[" . $username . "]";
			$fileReadSip[$linecount] = "username=" . $username; 
			$fileReadSip[$linecount + 1] = "secret=" . $secret; 
			$fileReadSip[$linecount + 2] = "accountcode=" . $accountcode; 
			$fileReadSip[$linecount + 3] = 'callerid=' . $callerid; 
			$fileReadSip[$linecount + 4] = "mailbox=" . $mailbox; 
			$fileReadSip = implode("\n", $fileReadSip); 
			fclose($fileOpenSip); 

			$fileOpenSip = fopen($filenameSip, "w+") or die("Couldn't create new file");  
			fwrite($fileOpenSip, $fileReadSip); 
			fclose($fileOpenSip);
		} 
		else {
			flash()->error('This Phone Extension is not exist in SIP file.');
            return redirect()->back()->withInput();
		}

        $phone->username = $username;
        $phone->secret = $secret;
        $phone->accountcode = $accountcode;
        $phone->callerid = $callerid;
        $phone->mailbox = $mailbox;
        $phone->police_station = $policeStation;
        $phone->division_id = $request->division_id;
        $phone->district_id = $request->district_id;
        $phone->incharge = $request->incharge;
        $phone->duty_officer = $request->duty_officer;
        $phone->oc = $request->oc;
        $phone->address = $request->address;
        $phone->remarks = $request->remarks;
        $phone->updated_by = Auth::id();
        $phone->save();
        flash()->success($username . ' Phone Extension & ' . $policeStation . ' Updated Successfully');
    	return redirect('phone');
    }

    public function divisionDistrictShow(Request $request)
    {   
        $districtList = District::where('division_id', $request->division_id)->pluck('name', 'id');
        return view('phone.division_district', compact('districtList'));
    }
}
