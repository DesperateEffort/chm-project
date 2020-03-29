<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
          'fir_name' => ['required', 'string', 'max:40', 'alpha'],
          'mid_name' => ['required', 'string', 'max:40', 'alpha'],
          'last_name' => ['required', 'string', 'max:40', 'alpha'],
          'suffix_name' => '',
          'location' => ['required', 'string', 'max:255'],
          'contact' => ['required', 'string', 'max:999999999999', 'numeric'],
          'age' => ['required', 'string', 'numeric', 'max:120'],
          'gender' => ['required', 'string', 'max:255'],
          'profession' => 'required',
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'regex:/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/i'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
          'fir_name.max'=>'First Name should be limited to 40 characters only',
          'fir_name.alpha'=>'First Name should be consisted of alphabet characters only',
          'mid_name.max'=>'Middle Name should be limited to 40 characters only',
          'mid_name.alpha'=>'Middle Name should be consisted of alphabet characters only',
          'last_name.max'=>'Last Name should be limited to 40 characters only',
          'last_name.alpha'=>'Last Name should be consisted of alphabet characters only',
          'suffix_name.max'=>'Suffixes should be limited to 40 characters only',
          'suffix_name.alpha'=>'Suffixes should be consisted of alphabet characters only',
          'location.max'=>'Address should be limited to 255 characters only',
          'contact.max' => 'Contact number should be limited to 12 digit only',
          'contact.numeric' => 'Contact number should be numbers only',
          'age.max' => 'Age should be less than 120 years.',
          'age.numeric' => 'Age should be numbers only',
          'gender.required' => 'Gender field is required',
          'profession.required' => 'Profession field is required',
          'email.email' => 'Email Address must be a address format (e.g. me@mydomain.com).',
          'email.regex' => 'Email Address must be a address format (e.g. me@mydomain.com).',
          'email.max'=>'Email Address should be limited to 255 characters only',
          'email.unique' => 'Email Address has already been used. Please use other e-mail',
          'password.min' => 'Password need to have more than 8 characters.',
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
        return User::create([
            'fir_name' => $data['fir_name'],
            'mid_name' => $data['mid_name'],
            'last_name' => $data['last_name'],
            'suffix_name' => $data['suffix_name'],
            'location' => $data['location'],
            'contact' => $data['contact'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'profession' => $data['profession'],
            'email' => $data['email'],
//            'password' => $data['password'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
