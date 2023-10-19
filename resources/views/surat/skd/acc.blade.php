@extends('layouts.app')
@section('title', 'Terima Pengajuan SKD')
@section('content')
<div class="card">
    <div class="card-body">
        <center class="m-t-30"> 
            <h4 class="card-title m-t-10">Pembuat</h4>
            <h4 class="card-subtitle">{{ $data->user->name }}</h4>
            <div class="row text-center justify-content-md-center">
                <div class="col-12"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                        <font class="font-medium">{{ $data->user->username }}</font>
                    </a>
                </div>
            </div>
        </center>
    </div>
    <div class="card-body"> 
        <hr>
        <center>
            <div class="d-flex flex-column">
                    <a href="{{ Route('cetak.skd', $data->id) }}" target="_blank"><b>Download / Cetak Surat</b></a>
                <div>
                    <hr>
                    <form method="post" action="{{ Route('skd.acc', $data->id) }}">
                        @csrf
                        
                        <button type="submit" class="btn btn-primary">Setujui</button>
                        <br>
                        <small>Setelah Klik Setujui, Pengajuan secara otomatis telah disetujui</small>
                        </center>
                </form>
            </div>
        </div>
    </div>
</div>
<a href="{{ URL::previous() }}" class="mdi mdi-backburger"><b>KEMBALI</b></a>
@endsection