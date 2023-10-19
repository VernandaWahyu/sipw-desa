@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="shadow card-body">
                    <div class="m-1 d-flex">
                        <div class="m-1  col-md-12">
                            <div class="mt-3 text-center">
                                <h3>Sistem Informasi Pembuatan Surat <br> Desa Mlarak</h3>
                                <hr>
                            </div>
                            <div class="m-3">
                                <h3>Surat Keterangan Pindah Penduduk (SKPP)</h3>
                                <form method="post" action="{{ Route('create.surat.skpp') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="NIK">NIK</label>
                                        <input type="number" class="form-control" id="NIK" placeholder="NIK" name="nik"
                                        value="{{ auth()->user()->username }}">
                                        @error('nik')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="Nama" placeholder="Nama Lengkap"
                                            name="name" value="{{ auth()->user()->name }}" >
                                        @error('name')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Jenis Kelamin">Jenis Kelamin</label>
                                        <select name="jk" id="jk" class="form-control" >
                                            <option value="{{ auth()->user()->jenis_kelamin }}">{{ auth()->user()->jenis_kelamin }}</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jk')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="TempatLahir">Tempat Lahir</label>
                                        <input type="text"  class="form-control" id="TempatLahir"
                                            placeholder="Tempat Lahir" name="tempatlahir" value="{{ auth()->user()->tempat_lahir }}">
                                        @error('tempatlahir')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="TanggalLahir">Tanggal Lahir</label>
                                        <input type="date"  class="form-control" id="TanggalLahir"
                                            placeholder="Tanggal Lahir" name="tanggallahir"value="{{ auth()->user()->tanggal_lahir}}">
                                        @error('tanggallahir')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <input type="text"  class="form-control" id="agama" placeholder="Agama"
                                            name="agama"value="{{ auth()->user()->agama }}">
                                        @error('agama')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="statuspernikahan">Status Pernikahan</label>
                                        <select name="statuspernikahan"  id="statuspernikahan" class="form-control">
                                            <option value="{{ auth()->user()->status_pernikahan }}">{{ auth()->user()->status_pernikahan }}</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                        @error('statuspernikahan')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text"  class="form-control" id="pekerjaan"
                                            placeholder="Pekerjaan" name="pekerjaan" value="{{ auth()->user()->pekerjaan }}">
                                        @error('pekerjaan')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat Asal</label>
                                        <input name="alamatasal"  id="alamat" class="form-control" value="{{ auth()->user()->alamat }}">
                                        @error('alamatasal')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="alamat_pindah_kelurahan">Desa/Kelurahan (Pindah)</label>
                                        <input type="text"  class="form-control" id="alamat_pindah_kelurahan"
                                            placeholder="Desa/Kelurahan" name="alamat_pindah_kelurahan">
                                        @error('alamat_pindah_kelurahan')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_pindah_kecamatan">Kecamatan (Pindah)</label>
                                        <input type="text"  class="form-control" id="alamat_pindah_kecamatan"
                                            placeholder="Kecamatan" name="alamat_pindah_kecamatan">
                                        @error('alamat_pindah_kecamatan')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_pindah_kabupaten">Kabupaten/Kota (Pindah)</label>
                                        <input type="text"  class="form-control" id="alamat_pindah_kabupaten"
                                            placeholder="Kabupaten/Kota" name="alamat_pindah_kabupaten">
                                        @error('alamat_pindah_kabupaten')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_pindah_provinsi">Provinsi (Pindah)</label>
                                        <input type="text"  class="form-control" id="alamat_pindah_provinsi"
                                            placeholder="Provinsi" name="alamat_pindah_provinsi">
                                        @error('alamat_pindah_provinsi')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea name="keterangan"  id="keterangan"
                                            class="form-control"></textarea>
                                        <small class="text-secondary">*Keterangan alasan mengajukan surat</small>
                                        @error('keterangan')
                                        <div class="alert alert-warning" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div> --}}
                                    <div class="m-2 d-flex">
                                        <button type="submit" class="m-2 btn btn-primary">Submit</button>
                                        <a href="{{ Route('home') }}" class="m-2 btn btn-danger text-white">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection