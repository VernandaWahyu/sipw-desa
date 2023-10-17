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
            'username' => ['required', 'string', 'max:16', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:20', 'unique:users'],
            'jenis_kelamin' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
            'agama' => ['required'],
            'pekerjaan' => ['required'],
            'status_pernikahan' => ['required'],
            'alamat' => ['required'],
            'dukuh' => ['required'],
            'rt' => ['required'],
            'rw' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            'name.required'=>'Nama Wajib Diisi',
            'username.required'=>'NIK Wajib Diisi',
            'username.unique'=>'NIK Sudah Pernah Digunakan',
            'username.max'=>'NIK Maksimal 16 Karakter',
            'email.required'=>'Email Wajib Diisi',
            'email.email'=>'Silahkan Masukkan Email Yang Valid',
            'email.unique'=>'Email Sudah Pernah Digunakan',
            'email.max'=>'Email Maksimal 20 Karakter',
            'password.required'=>'Password Wajib Diisi',
            'password.min'=>'Password Minimal 8 Karakter',
            'jenis_kelamin.required'=>'Jenis Kelamin Wajib Diisi',
            'tempat_lahir.required'=>'Tempat Lahir Wajib Diisi',
            'tanggal_lahir.required'=>'Tanggal Lahir Wajib Diisi',
            'agama.required'=>'Agama Wajib Diisi',
            'pekerjaan.required'=>'Pekerjaan Wajib Diisi',
            'status_pernikahan.required'=>'Status Pernikahan Wajib Diisi',
            'alamat.required'=>'Alamat Wajib Diisi',
            'dukuh.required'=>'Dukuh Wajib Diisi',
            'rt.required'=>'RT Wajib Diisi',
            'rw.required'=>'RW Wajib Diisi'
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
            'email' => $data['email'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'agama' => $data['agama'],
            'pekerjaan' => $data['pekerjaan'],
            'status_pernikahan' => $data['status_pernikahan'],
            'alamat' => $data['alamat'],
            'dukuh' => $data['dukuh'],
            'rt' => $data['rt'],
            'rw' => $data['rw'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function registered()
    {
        $this->guard()->logout(); 
        return redirect()->route('login')->with('success','Kamu sudah terdaftar, Silahkan masuk kembali')  ;
    }
}
