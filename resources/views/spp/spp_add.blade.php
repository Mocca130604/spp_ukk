@extends('main')
@section('title','Spp-add')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add SPP</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 
@endsection
@section('content')

<div class="content mt-3">
            <div class="animated fadeIn">
               

                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Add Spp</strong>
                            <div class="pull-right">
                                <a href="{{ url('user_daftar')}}" class= "btn btn-success btn-sm">
                                    <i class= "fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <form action="{{ url('spp') }}"  method="post">
                       @csrf
                            <div class="form-group">
                                <label>Angkatan</label>
                                <br>
                                    <select data-placeholder="Pilih angkatan" class="standardSelect" tabindex="1" name="angkatan">                                    
                                        @foreach($angkatan as $item)
                                                <option value={{$item->angkatan}}>{{$item->angkatan}}</option>
                                        @endforeach          
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Tahun Pelajaran</label>
                                <br>
                                    <select data-placeholder="Tahun Pelajaran" class="standardSelect" tabindex="1" name="tahun">                                    
                                        @foreach($tahun as $item)
                                                <option value={{$item->tahun_spp}}>{{$item->tahun_spp}}</option>
                                        @endforeach          
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Bulan Spp</label>
                                <br>
                                <select data-placeholder="Nama Bulan" class="standardSelect" tabindex="1" name="bulan">
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option> 
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                            <div calss="form-group">
                                <label>nominal</label>
                                <input type="text" name="nominal" class="form-control" autofocus required>
                            <br>  
                            <button type="submit" class="btn btn-success"> Save </button>
                        </form>
                
                </div>
            </div>
        </div>
    </div>
</div>  

                
@endsection