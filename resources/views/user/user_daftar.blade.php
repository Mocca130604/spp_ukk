@extends('main')
@section('title','User')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-user"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 
@endsection
@section('content')

<div class="content mt-3">
        <div class="animated fadeIn">
            <div>
           
            </div>
                <div class="row">
                    <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status')}}
                        </div>
                    @endif
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">User Table</strong>
                            
                                <div class="pull-right">
                                    <a href="{{ url('user/add')}}" class= "btn btn-success btn-sm">
                                        <i class= "fa fa-plus"></i> Add
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Nama Petugas</th>
                                <th scope="col">Level</th>
                                <th scope="col">Aksi</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td>{{$item->username}}</td>
                                    <td>{{$item->nama_petugas}}</td>
                                    <td>{{$item->level}}</td>
                                    <td>
                                        
                                    
                                        <a href="{{ url('user/edit/'.$item->id_petugas) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>

                                        <form action="{{ url('userdelete/'.$item->id_petugas) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda Yakin?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                        </form>
                                
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
</div>  
  
                
@endsection