@extends('template_back.content')
@section('title', 'Form Input Pengguna')
@section('content')

<!-- container opened -->
<div class="container">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Form Input Data pengguna</h4>
            <nav aria-label="breadcrumb">
                <ol class ="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('data_pengguna')}}">Data Pengguna</a></li>
                    <li class="breadcrumb-item text-white active">Form Input Data pengguna</li>
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
                        Form Input Data pengguna
                    </div>
                    <p class="mg-b-20">Silahkan isi form di bawah ini dengan lengkap.</p>
                    <!-- message info -->
                    @include('_component.message')
                    <div class="pd-10 pd-sm-20 bg-gray-100">
                        <form action="{{ route('data_pengguna.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
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
                                        </div>
                                        </div>  
                                    <div class="row row-xs align-items-center mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Nama </label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <input class="form-control" placeholder="" type="text" name="name" value="{{old('name')}}">
                                        </div>
                                    </div>
                                    <div class="row row-xs align-items-center mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Email </label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <input class="form-control numberonly" name='email' placeholder="" type="text" onkeyup="this.value=number_format(this.value)" value="{{old('email')}}">
                                        </div>
                                    </div>
                                    <div class="row row-xs align-items-center mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Password </label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <input class="form-control numberonly" name='password' placeholder="" type="text" onkeyup="this.value=number_format(this.value)" value="{{old('password')}}">
                                        </div>
                                    </div>
                                     <div class="row"> 
                        <!-- <div class="col-md-3"> -->
                            <label class="form-label mt-2 mb-0">Hak Akses</label> 
                            <select name="namerole" class="form-control" >
                                <option value="">=== semua ===</option>
                                <option value="administrator" @if(request()->get('f1')==1) selected @endif>administrator</option>
                                <option value="operator" @if(request()->get('f1')==2) selected @endif>operator</option>
                            </select>
                            <div class="col-md-3">
                        </div>
                    </div>
                    <div class="col-md-6">   
                                    <div class="row row-xs align-items-center mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Waktu input </label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <div class="input-group">
                                                <input id="datepickerA" class="form-control" name="tgl_produksi" value="{{date('d/m/Y')}}" placeholder="DD/MM/YYYY" type="text">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <button type="submit" class="float-right btn btn-primary pd-x-30 mg-e-5 mg-t-5">
                            <i class='fa fa-save'></i> Simpan</button>
                        <a href="{{route('data_pengguna')}}" class="btn btn-secondary pd-x-30 mg-t-5">
                            <i class='fa fa-chevron-left'></i> Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
                                      
                                

@endsection