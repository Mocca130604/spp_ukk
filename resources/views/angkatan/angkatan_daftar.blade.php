@extends('main')
@section('title','User')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Angkatan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-users"></i></li>
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
                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status')}}
                                </div>
                @endif
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                            
                            <div class="pull-right">
                                <a href="{{ url('angkatan/create')}}" class= "btn btn-success btn-sm">
                                    <i class= "fa fa-plus"></i> Add
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Tahun Masuk</th>
                            <th scope="col">Tahun Keluar</th>
                            <th scope="col">Aksi</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($angkatan as $item)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$item->angkatan}}</td>
                                <td>{{$item->tahun_masuk}}</td>
                                <td>{{$item->tahun_keluar}}</td>
                                <td>
                                
                                    <a href="{{ url('angkatan/'.$item->id_angkatan.'/edit') }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>  

                
@endsection