@extends('main')
@section('title','Kelas-add')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Angkatan</h1>
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
                            <strong class="card-title">Add Angkatan</strong>
                            <div class="pull-right">
                                <a href="{{ url('angkatan_daftar')}}" class= "btn btn-success btn-sm">
                                    <i class= "fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <form action="{{ url('angkatan') }}"  method="post">
                       @csrf
                            <div class="form-group">
                                <label>Angkatan</label>
                                <input type="text" name="angkatan" class="form-control" autofocus required>
                            </div>

                            <div class="form-group">
                                <label>Tahun Masuk</label>
                                <input type="text" name="masuk" class="form-control" autofocus required>
                            </div>

                            <div class="form-group">
                                <label>Tahun Keluar</label>
                                <input type="text" name="keluar" class="form-control" autofocus required>
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