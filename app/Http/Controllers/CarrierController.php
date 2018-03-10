<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Models\Carrier;

class CarrierController extends Controller
{
	public function index()
    {
    	$carriers = Carrier::orderBy('id', 'desc')->get();

        return view('carrier.index', compact('carriers'));
    }

    public function create()
    {
    	return view('carrier.create');
    }

    public function store(Request $request)
    {
        $input = Input::all();
        $rules = [
            'carrierid' => 'required|unique:carriers',
            'register' => 'required|unique:carriers',
            'disallow' => 'required',
            'type' => 'required',
            'dtmfmode' => 'required',
            'context' => 'required',
            'qualify' => 'required',
            'insecure' => 'required',
            'nat' => 'required',
            'host' => 'required',
            'username' => 'required',
            'secret' => 'required',
            'gsmallow' => 'required',
            'alawallow' => 'required',
            'ulawallow' => 'required',
            'AGIexten' => 'required',
            'SETexten' => 'required',
            'Dialexten' => 'required',
            'Hangupexten' => 'required',
        ];
        $messages = [];
        
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $searchRegister = $request->register;
        $stringForReg = file_get_contents("F:/xampp/htdocs/police/resources/views/phone/sip-myol.conf");
        $stringForReg = explode("\n", $stringForReg);
        if(in_array($searchRegister, $stringForReg)) {
            flash()->error('This Registration String is Already Exist.');
            return redirect()->back()->withInput();
        }

        $searchCarrierIdComment = "; CARRIERID=" . $request->carrier_id;

        $stringForCarrierIdSip = file_get_contents("F:/xampp/htdocs/police/resources/views/phone/sip-myol.conf");
        $stringForCarrierIdSip = explode("\n", $stringForCarrierIdSip);
        if(in_array($searchCarrierIdComment, $stringForCarrierIdSip)) {
            flash()->error('This Carrier ID is Already Exist.');
            return redirect()->back()->withInput();
        }

        $stringForCarrierIdExten = file_get_contents("F:/xampp/htdocs/police/resources/views/phone/extensions-myol.conf");
        $stringForCarrierIdExten = explode("\n", $stringForCarrierIdExten);
        if(in_array($searchCarrierIdComment, $stringForCarrierIdExten)) {
            flash()->error('This Carrier ID is Already Exist');
            return redirect()->back()->withInput();
        }

        $carrierid = $request->carrierid;

        $search = "[" . $carrierid . "]";
        $string = file_get_contents("F:/xampp/htdocs/police/resources/views/phone/sip-myol.conf");
        $string = explode("\n", $string);
        if(in_array($search, $string)) {
            flash()->error('This Carrier ID is Already Exist.');
            return redirect()->back()->withInput();
        }

        $carrierIdComment = "; CARRIERID=" . $carrierid . "\n";
        $register = $request->register . "\n";

        $startSip = "[" . $carrierid . "]\n";
        $disallow = $request->disallow . "\n";
        $type = $request->type . "\n";
        $dtmfmode = $request->dtmfmode . "\n";
        $context = $request->context . "\n";
        $qualify = $request->qualify . "\n";
        $insecure = $request->insecure . "\n";
        $nat = $request->nat . "\n";
        $host = $request->host . "\n";
        $username = $request->username . "\n";
        $secret = $request->secret . "\n";
        $gsmallow = $request->gsmallow . "\n";
        $alawallow = $request->alawallow . "\n";
        $ulawallow = $request->ulawallow . "\n";
        $newLineSip = "\n";


        $prependSip = $carrierIdComment . $register . $startSip . $disallow . $type . $dtmfmode . $context . $qualify . $insecure . $nat . $host . $username . $secret . $gsmallow . $alawallow . $ulawallow . $newLineSip;
        $fileSip = 'F:/xampp/htdocs/police/resources/views/phone/sip-myol.conf';
        $fileContentsSip = file_get_contents($fileSip);
        file_put_contents($fileSip, $prependSip . $fileContentsSip);

        $AGIexten = $request->AGIexten . "\n";
        $SETexten = $request->SETexten . "\n";
        $Dialexten = $request->Dialexten . "\n";
        $Hangupexten = $request->Hangupexten . "\n";
        $newLineExten = "\n";

        $prependExten = $carrierIdComment . $AGIexten . $SETexten . $Dialexten . $Hangupexten . $newLineExten;
        $fileExten = 'F:/xampp/htdocs/police/resources/views/phone/extensions-myol.conf';
        $fileContentsExten = file_get_contents($fileExten);
        file_put_contents($fileExten, $prependExten . $fileContentsExten);

        $carrier = new Carrier;
        $carrier->carrierid = $request->carrierid;
        $carrier->register = $request->register;
        $carrier->disallow = $request->disallow;
        $carrier->type = $request->type;
        $carrier->dtmfmode = $request->dtmfmode;
        $carrier->context = $request->context;
        $carrier->qualify = $request->qualify;
        $carrier->insecure = $request->insecure;
        $carrier->nat = $request->nat;
        $carrier->host = $request->host;
        $carrier->username = $request->username;
        $carrier->secret = $request->secret;
        $carrier->gsmallow = $request->gsmallow;
        $carrier->alawallow = $request->alawallow;
        $carrier->ulawallow = $request->ulawallow;
        $carrier->AGIexten = $request->AGIexten;
        $carrier->SETexten = $request->SETexten;
        $carrier->Dialexten = $request->Dialexten;
        $carrier->Hangupexten = $request->Hangupexten;
        //$carrier->created_by = Auth::id();
        $carrier->save();

        flash()->message($carrierid . ' Carrier Created Successfully.');
        return redirect('/carrier');
    }

    public function show($id)
    {
        $carrier = Carrier::find($id);
        return view('carrier.show', compact('carrier'));
    }

    public function edit($id)
    {
        $carrier = Carrier::find($id);
        return view('carrier.edit', compact('carrier'));
    }

    public function update(Request $request, $id)
    {
        $carrier = Carrier::find($id);

        $input = Input::all();
        $rules = [
            'carrierid' => 'required|unique:carriers,carrierid,' . $carrier->id,
            'register' => 'required|unique:carriers,register,' . $carrier->id,
            'disallow' => 'required',
            'type' => 'required',
            'dtmfmode' => 'required',
            'context' => 'required',
            'qualify' => 'required',
            'insecure' => 'required',
            'nat' => 'required',
            'host' => 'required',
            'username' => 'required',
            'secret' => 'required',
            'gsmallow' => 'required',
            'alawallow' => 'required',
            'ulawallow' => 'required',
            'AGIexten' => 'required',
            'SETexten' => 'required',
            'Dialexten' => 'required',
            'Hangupexten' => 'required',
        ];
        $messages = [];
        
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $searchSip = "[" . $carrier->carrierid . "]";

        /* sip-myol.conf */
        $stringSip = file_get_contents('F:/xampp/htdocs/police/resources/views/phone/sip-myol.conf');
        $stringSip = explode("\n", $stringSip);
        if(in_array($searchSip, $stringSip)) {
            $fileSip = 'F:/xampp/htdocs/police/resources/views/phone/sip-myol.conf';
            $lineCountSip = 0;
            $handleSip = fopen($fileSip, "r");
            while(!feof($handleSip)){
              $lineSip = fgets($handleSip);
              $lineCountSip++;
              if($lineSip == "[" . $carrier->carrierid . "]\n") {
                break;
              }
            }
            fclose($handleSip);

            $linesSip = file($fileSip);//file in to an array
            //echo $linesSip[$lineCountSip - 1];

            //sip-myol.conf File edit
            $filenameSip = "F:/xampp/htdocs/police/resources/views/phone/sip-myol.conf"; 
            $fileOpenSip = fopen($filenameSip, "r") or die("Couldn't create new file");  
            $fileReadSip = fread ($fileOpenSip, filesize($filenameSip)); 

            $fileReadSip = explode("\n", $fileReadSip); 
            $fileReadSip[$lineCountSip - 3] = "; CARRIERID=" . $request->carrierid;
            $fileReadSip[$lineCountSip - 2] = $request->register;
            $fileReadSip[$lineCountSip - 1] = "[" . $request->carrierid . "]";
            $fileReadSip[$lineCountSip] = $request->disallow; 
            $fileReadSip[$lineCountSip + 1] = $request->type; 
            $fileReadSip[$lineCountSip + 2] = $request->dtmfmode; 
            $fileReadSip[$lineCountSip + 3] = $request->context; 
            $fileReadSip[$lineCountSip + 4] = $request->qualify; 
            $fileReadSip[$lineCountSip + 5] = $request->insecure; 
            $fileReadSip[$lineCountSip + 6] = $request->nat; 
            $fileReadSip[$lineCountSip + 7] = $request->host; 
            $fileReadSip[$lineCountSip + 8] = $request->username; 
            $fileReadSip[$lineCountSip + 9] = $request->secret; 
            $fileReadSip[$lineCountSip + 10] = $request->gsmallow; 
            $fileReadSip[$lineCountSip + 11] = $request->alawallow; 
            $fileReadSip[$lineCountSip + 12] = $request->ulawallow; 
            $fileReadSip = implode("\n", $fileReadSip); 
            fclose($fileOpenSip); 

            $fileOpenSip = fopen($filenameSip, "w+") or die("Couldn't create new file");  
            fwrite($fileOpenSip, $fileReadSip); 
            fclose($fileOpenSip);
        } 
        else {
            flash()->error($carrier->carrierid . ' is not exist in SIP file.');
            return redirect()->back()->withInput();
        }

        /* extensions-myol.conf */
        $searchExten = "; CARRIERID=" . $carrier->carrierid;
        
        $stringExten = file_get_contents('F:/xampp/htdocs/police/resources/views/phone/extensions-myol.conf');
        $stringExten = explode("\n", $stringExten);
        if(in_array($searchExten, $stringExten)) {
            $fileExten = 'F:/xampp/htdocs/police/resources/views/phone/extensions-myol.conf';
            $lineCountExten = 0;
            $handleExten = fopen($fileExten, "r");
            while(!feof($handleExten)){
              $lineExten = fgets($handleExten);
              $lineCountExten++;
              if($lineExten == "; CARRIERID=" . $carrier->carrierid . "\n") {
                break;
              }
            }
            fclose($handleExten);

            $linesExten = file($fileExten);

            //extensions-myol.conf File edit
            $filenameExten = "F:/xampp/htdocs/police/resources/views/phone/extensions-myol.conf"; 
            $fileOpenExten = fopen($filenameExten, "r") or die("Couldn't create new file");  
            $fileReadExten = fread ($fileOpenExten, filesize($filenameExten)); 

            $fileReadExten = explode("\n", $fileReadExten); 
            $fileReadExten[$lineCountExten - 1] = "; CARRIERID=" . $request->carrierid;
            $fileReadExten[$lineCountExten] = $request->AGIexten; 
            $fileReadExten[$lineCountExten + 1] = $request->SETexten; 
            $fileReadExten[$lineCountExten + 2] = $request->Dialexten; 
            $fileReadExten[$lineCountExten + 3] = $request->Hangupexten; 
            $fileReadExten = implode("\n", $fileReadExten); 
            fclose($fileOpenExten); 

            $fileOpenExten = fopen($filenameExten, "w+") or die("Couldn't create new file");  
            fwrite($fileOpenExten, $fileReadExten); 
            fclose($fileOpenExten);
        } 
        else {
            flash()->error("; CARRIERID=" . $carrier->carrierid . ' is not exist in Extensions file.');
            return redirect()->back()->withInput();
        }

        $carrier->carrierid = $request->carrierid;
        $carrier->register = $request->register;
        $carrier->disallow = $request->disallow;
        $carrier->type = $request->type;
        $carrier->dtmfmode = $request->dtmfmode;
        $carrier->context = $request->context;
        $carrier->qualify = $request->qualify;
        $carrier->insecure = $request->insecure;
        $carrier->nat = $request->nat;
        $carrier->host = $request->host;
        $carrier->username = $request->username;
        $carrier->secret = $request->secret;
        $carrier->gsmallow = $request->gsmallow;
        $carrier->alawallow = $request->alawallow;
        $carrier->ulawallow = $request->ulawallow;
        $carrier->AGIexten = $request->AGIexten;
        $carrier->SETexten = $request->SETexten;
        $carrier->Dialexten = $request->Dialexten;
        $carrier->Hangupexten = $request->Hangupexten;
        //$carrier->updated_by = Auth::id();
        $carrier->save();
        flash()->success($request->carrierid . ' Carrier ID Updated Successfully');
        return redirect('carrier');
    }    
}
