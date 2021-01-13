<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Conductor;
use App\Http\Controllers\Conductores;


class PruebaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {   
       if(Auth::user()){
	$user = User::find(Auth::user()->id);
	return view('users.edit')->withUser($user);
	}
       else{
	return redirect()->back();
	}
    }

   public function update(Request $request){	
	$request->validate([
		'name' => 'required|min:2|max:255',
		'surname' => 'required|min:2|max:255',
		'fecha_nac' => 'required|before:2003-01-01|after:1900-01-01',
	]);

    $user = User::find(Auth::user()->id);
	
	if($user) {
	$word = "@driver.";
	$mystring = $user->email;
 	
	// Test if string contains the word 
	if(strpos($mystring, $word) !== false){

    	$conductor = Conductor::findOrFail($mystring);
	
	$conductor->email = $user->email;
        $conductor->name = $request['name'];
        $conductor->surname = $request['surname'];
        $conductor->fecha_nac = $request['fecha_nac'];
	 $conductor->password = $user->password;
       
        $conductor->save();
	
	

	//ConductorController::update($request, $user->email);

	

	}

	
	$user->name = $request['name'];
	$user->fecha_nac = $request['fecha_nac'];
	$user->surname = $request['surname'];
	$user->save();
	
	}

	return redirect('home2');
	}
    
}
