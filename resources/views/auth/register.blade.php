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
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                            name="username" value="{{ old('username') }}" required autocomplete="username">

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
                    <div class="col-md-8">
                        <input id="male" type="radio" name="jenis_kelamin" value="L" class="@error('jenis_kelamin') is-invalid @enderror">
                        <label for="male"  style="margin-right: 20px">Laki-laki</label>
                        <input id="female" type="radio" name="jenis_kelamin" value="P" class="@error('jenis_kelamin') is-invalid @enderror">
                        <label for="female">Perempuan</label>
                        @error('jenis_kelamin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="place_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>

                    <div class="col-md-8">
                        <input id="place_of_birth" type="text" class="form-control @error('place_of_birth') is-invalid @enderror"
                            name="place_of_birth" value="{{ old('place_of_birth') }}" required>

                        @error('place_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                    <div class="col-md-8">
                        <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                            name="date_of_birth" value="{{ old('date_of_birth') }}" required>

                        @error('date_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Agama') }}</label>

                    <div class="col-md-8">
                        <input id="religion" type="text" class="form-control @error('religion') is-invalid @enderror"
                            name="religion" value="{{ old('religion') }}" required>

                        @error('religion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="job" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>

                    <div class="col-md-8">
                        <input id="job" type="text" class="form-control @error('job') is-invalid @enderror"
                            name="job" value="{{ old('job') }}" required>

                        @error('job')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="marriage_status" class="col-md-4 col-form-label text-md-right">{{ __('Status Pernikahan') }}</label>

                    <div class="col-md-8">
                        <input id="kawin" type="radio" name="marriage_status" value="Kawin" class="@error('marriage_status') is-invalid @enderror">
                        <label for="kawin"  style="margin-right: 20px">Kawin</label>
                        <input id="belum_kawin" type="radio" name="marriage_status" value="Belum Kawin" class="@error('marriage_status') is-invalid @enderror">
                        <label for="belum_kawin">Belum Kawin</label>
                        @error('marriage_status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                    <div class="col-md-8">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                            name="address" value="{{ old('address') }}" required>

                        @error('address')
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
                            class="form-control @error('password') is-invalid @enderror" name="password" required
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
                            required autocomplete="new-password">
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
@endsection