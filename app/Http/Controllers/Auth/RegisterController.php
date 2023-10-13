<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
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
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:20', 'unique:users'],
            'jenis_kelamin' => ['required', 'string', 'max:1'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'string', 'max:255'],
            'agama' => ['required', 'string', 'max:100'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'status_pernikahan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'tempat_lahir' => $data['place_of_birth'],
            'tanggal_lahir' => $data['date_of_birth'],
            'agama' => $data['religion'],
            'pekerjaan' => $data['job'],
            'status_pernikahan' => $data['marriage_status'],
            'alamat' => $data['address'],
            'email' => 'ghauzarakbar@02gmail.com',
            'email_verified_at' => date(),
            'status' => 'User',
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function registered()
    {
        $this->guard()->logout(); 
        return redirect()->route('login')->with('success','Kamu sudah terdaftar, Silahkan masuk kembali')  ;
    }
}
