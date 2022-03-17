@extends('main')
@section('title','Siswa-add')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Siswa</h1>
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
                            <strong class="card-title">Add Siswa</strong>
                            <div class="pull-right">
                                <a href="{{ url('siswa')}}" class= "btn btn-success btn-sm">
                                    <i class= "fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <form action="{{ url('siswa') }}"  method="post">
                        @csrf
                            
                            <div class="form-group">
                                <label>Nisn</label>
                                <input type="numeric" name="nisn" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nis</label>
                                <input type="numeric" name="nis" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="text" name="telp" class="form-control" autofocus required>
                            </div>

                            <div class="form-group">
                                <label>kelas</label>
                                <br>
                            <select data-placeholder="Pilih kelas" class="standardSelect" tabindex="1" name="kelas">                                    
                            @foreach($kelas as $item)
                                    <option value={{$item->id_kelas}}>{{$item->nama_kelas}}</option>
                            @endforeach          
                            </select>
                            </div>
                            <br>  
                            <button type="submit" class="btn btn-success"> Save </button>
                        </form>
                
                </div>
            </div>
        </div>
    </div>
</div>  

                
@endsection