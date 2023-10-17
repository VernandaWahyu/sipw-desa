@extends('layouts.app')
@section('title', 'REGISTER')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card rounded-lg shadow card-body">
            <div class="p-2">
                <h3 class="text-center font-weight-bold">MENDAFTAR</h3>
                <h4 class="text-center">
                    <small>Sistem Informasi Pembuatan Surat Desa Mlarak</small>
                </h4>
                <hr>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>

                    <div class="col-md-8">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                            name="username" value="{{ old('username') }}"  autocomplete="username">

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                    <div class="col-md-8">
                        <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" 
                            autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
                
                    <div class="col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                            name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" >
                            <label class="form-check-label" for="jenis_kelamin">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                             name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" >
                            <label class="form-check-label" for="jenis_kelamin">
                                Perempuan
                            </label>
                        </div>
                    
                        @error('jenis_kelamin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> 
                </div>
                
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>

                    <div class="col-md-8">
                        <input id="tempat_lahir" type="text"
                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                            value="{{ old('tempat_lahir') }}" name="tempat_lahir" id="tempat_lahir" 
                            autocomplete="tempat_lahir">

                        @error('tempat_lahir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>
                
                    <div class="col-md-8">
                        <input id="tanggal_lahir" type="date"
                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                            value="{{ old('tanggal_lahir') }}" name="tanggal_lahir" id="tanggal_lahir" 
                            autocomplete="tanggal_lahir">
                
                        @error('tanggal_lahir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="agama" class="col-md-4 col-form-label text-md-right">{{ __('Agama') }}</label>

                    <div class="col-md-8">
                        <input id="agama" type="text"
                            class="form-control @error('agama') is-invalid @enderror" 
                            value="{{ old('agama') }}" name="agama" id="agama" 
                            autocomplete="agama">

                        @error('agama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>

                    <div class="col-md-8">
                        <input id="pekerjaan" type="text"
                            class="form-control @error('pekerjaan') is-invalid @enderror"
                            value="{{ old('pekerjaan') }}" name="pekerjaan" id="pekerjaan" 
                            autocomplete="pekerjaan">

                        @error('pekerjaan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status_pernikahan" class="col-md-4 col-form-label text-md-right">{{ __('Status Pernikahan') }}</label>
                
                    <div class="col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('status_pernikahan') is-invalid @enderror" type="radio" 
                            name="status_pernikahan" id="status_pernikahan" value="Menikah" >
                            <label class="form-check-label" for="status_pernikahan">
                                Menikah
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('status_pernikahan') is-invalid @enderror" type="radio" 
                            name="status_pernikahan" id="status_pernikahan" value="Belum Menikah" >
                            <label class="form-check-label" for="status_pernikahan">
                                Belum Menikah
                            </label>
                        </div>
                    
                        @error('status_pernikahan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> 
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                    <div class="col-md-8">
                        <input id="alamat" type="text"
                            class="form-control @error('alamat') is-invalid @enderror" 
                            value="{{ old('alamat') }}"name="alamat" id="alamat" 
                            autocomplete="alamat">

                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dukuh" class="col-md-4 col-form-label text-md-right">{{ __('Dukuh') }}</label>

                    <div class="col-md-8">
                        <input id="dukuh" type="text"
                            class="form-control @error('dukuh') is-invalid @enderror" 
                            value="{{ old('dukuh') }}"name="dukuh" id="dukuh" 
                            autocomplete="dukuh">

                        @error('dukuh')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rt" class="col-md-4 col-form-label text-md-right">{{ __('RT') }}</label>
                    <div class="col-md-2">
                        <input id="rt" type="text" class="form-control @error('rt') is-invalid @enderror" 
                        value="{{ old('rt') }}"name="rt" id="rt"  autocomplete="rt">
                        @error('rt')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                
                    <label for="rw" class="col-md-2 col-form-label text-md-right">{{ __('RW') }}</label>
                    <div class="col-md-2">
                        <input id="rw" type="text" class="form-control @error('rw') is-invalid @enderror"
                        value="{{ old('rw') }}" name="rw" id="rw"  autocomplete="rw">
                        @error('rw')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" 
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                             autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mx-1">
                    <button type="submit" class="btn btn-primary mdi-login mdi">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection