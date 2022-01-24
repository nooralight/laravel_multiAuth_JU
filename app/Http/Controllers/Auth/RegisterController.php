<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
            'nameEn' => ['required', 'string', 'max:255'],
            'nameBn' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'dob' => ['required', 'date'],
            'mobile' => ['required', 'digits:11'],

            'ju_batch' => ['required', 'string', 'max:64'],
            'iit_batch' => ['required', 'string', 'max:64'],
            'hall' => ['required', 'string', 'max:64'],
            'ac_session' => ['required', 'string', 'max:64'],
            'degree_obt' => ['required', 'string', 'max:64'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data){
        return User::create([
            'nameEn' => $data['nameEn'],
            'nameBn' => $data['nameBn'],

            'email' => $data['email'],
            'password' => Hash::make($data['password']),

            'gender' => $data['gender'],
            'blood' => $data['blood'],
            'dob' => $data['dob'],
            'district' => $data['district'],
            'present_address' => $data['present_address'],
            'mobile' => $data['mobile'],
            'fb_link' => $data['fb_link'],

            'ju_batch' => $data['ju_batch'],
            'iit_batch' => $data['iit_batch'],
            'hall' => $data['hall'],
            'ac_session' => $data['ac_session'],
            'degree_obt' => $data['degree_obt'],

            'occupation' => $data['occupation'],
            'designation' => $data['designation'],
            'organization' => $data['organization'],
            'address_org' => $data['address_org'],
        ]);
    }
}
