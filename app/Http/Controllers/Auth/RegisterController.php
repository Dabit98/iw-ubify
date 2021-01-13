<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Conductor;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'min:3','max:255'],
            'surname' => ['required', 'string', 'min:3', 'max:255'],
            'fecha_nac' => ['required', 'date', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)

    {

	$word = "@driver.";
	$mystring = $data['email'];
 
	// Test if string contains the word 
	if(strpos($mystring, $word) !== false){
    	$conductor = new Conductor;
	$conductor->email = $data['email'];
        $conductor->name = $data['name'];
        $conductor->surname = $data['surname'];
        $conductor->fecha_nac = $data['fecha_nac'];
        $conductor->password = Hash::make($data['password']);
        $conductor->save();

	}
	
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'fecha_nac' => $data['fecha_nac'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
