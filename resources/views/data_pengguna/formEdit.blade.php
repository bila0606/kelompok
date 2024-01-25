@extends('template_back.content')
@section('title', 'Form Edit Pengguna')
@section('content')

@php 
$Tanggal = new \App\Helpers\Tanggal; //panggil no static function
$Konversi = new \App\Helpers\Konversi; //panggil no static function
@endphp
<!-- container opened -->
<div class="container">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Form Edit Pengguna </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('data_pengguna')}}">Data Barang</a></li>
                    <li class="breadcrumb-item text-white active">Form Edit Barang</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->
    <div class="row row-sm">
        <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Form Edit Barang
                    </div>
                    <p class="mg-b-20">Silahkan isi form di bawah ini dengan lengkap.</p>
                    <!-- message info -->
                    @include('_component.message')
                    <div class="pd-10 pd-sm-20 bg-gray-100">
                        <form action="{{ route('data_pengguna.update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                <div class="row row-xs align-items-top mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Gambar </label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <input class="form-control" name="img" type="file">
                                            <small><p class="text-muted">* File Extention .png/.jpg/.jpeg  | size image Max 2MB : (1125px x 792px) &nbsp;</p></small>
                                            <img class="img-responsive" width="50%" height="auto" src="@if($data->img) {{asset('')}}images/barang/{{$data->img}} @else {{asset('')}}images/no-image.png @endif">
                                        </div>
                                    </div>  
                                    <div class="row row-xs align-items-center mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Nama </label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <input class="form-control" placeholder="" type="text" name="name" value="{{isset($data->name)?$data->name:old('name')}}">
                                        </div>
                                    </div>
                                    <div class="row row-xs align-items-center mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Email </label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <input class="form-control" placeholder="" type="text" name="email" value="{{isset($data->email)?$data->email:old('email')}}">
                                        </div>

                                    
                                        <div class="row"> 
                        <!-- <div class="col-md-3"> -->
                            <label class="form-label mt-2 mb-0">Hak Akses</label> 
                            <select id="f1" class="form controle select2" name="namerole" onchange="reload_table()">
                                <option value="{{$data ->namerole}}">{{$data ->namerole}}</option>
                                <option value="">=== semua ===</option>
                                <option value="1" @if(request()->get('f1')==1) selected @endif>administrator</option>
                                <option value="2" @if(request()->get('f1')==2) selected @endif>operator</option>
                            </select>
                        </div>
                    </div>
                        
                                    
                        </div>
                        </div>
                        <button type="submit" class="float-right btn btn-primary pd-x-30 mg-e-5 mg-t-5"><i id="msg_formEdit"></i>&nbsp;&nbsp;<i class='fa fa-save'></i> Simpan</button>
                        <a href="{{route('data_pengguna')}}" class="btn btn-secondary pd-x-30 mg-t-5"><i class='fa fa-chevron-left'></i> Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
    
@endsection
