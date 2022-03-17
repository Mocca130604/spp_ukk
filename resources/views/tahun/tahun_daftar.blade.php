@extends('main')
@section('title','Tahun')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Kelas</h1>
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
                                <a href="{{ url('tahun/create')}}" class= "btn btn-success btn-sm">
                                    <i class= "fa fa-plus"></i> Add
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tahun Spp</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tahun as $item)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$item->tahun_spp}}</td>
                                
                                <td>
                                
                                    <form action="{{ url('tahun/'.$item->id_tahun) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda Yakin?')">
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

                
@endsection