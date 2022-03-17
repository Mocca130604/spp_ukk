@extends('main')
@section('title','Siswa')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
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
                                <div class="row">
                                
                                    <div class="card-body card-block">
                                        <form action="{{ url('siswa/search')}}"  class="form-horizontal">
                                        
                                          <div class="row form-group">
                                            <div class="col col-md-4">
                                              <div class="input-group">
                                                    <input type="text" id="input1-group1" name="cari" placeholder="Nama Siswa..." class="form-control"
                                                    value="{{ old('cari') }}">
                                                    <button class="btn btn-primary btn-sm" type="submit">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                            </div>
                                          </div>
                                        </form>
                                    </div>
                                    
                                    {{-- <div class="md-4">
                                    <label for="exampleDataList" class="form-label">Nama Kelas</label>
                                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Cari Kelas.....">
                                        <datalist id="datalistOptions">
                                            @foreach($kelas as $item)
                                                    <option value={{$item->nama_kelas}}>{{$item->nama_kelas}}</option>
                                            @endforeach 
                                        </datalist>
                                    </div> --}}

                                </div>
                                <br>
                                <strong class="card-title">Siswa Table</strong>

                               

                                <div class="pull-right">
                                    <a href="{{ url('siswa/create ')}}" class= "btn btn-success btn-sm">
                                        <i class= "fa fa-plus"></i> Add
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nisn</th>
                                <th scope="col">Nis</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Nama Kelas</th>
                                <th scope="col">Aksi</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($siswa as $item)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td>{{$item->nisn}}</td>
                                    <td>{{$item->nis}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->nama_kelas}}</td>
                                    <td>
                                        
                                    
                                        <a href="{{ url('siswa/'.$item->nisn.'/edit') }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>

                                        <form action="{{ url('siswa/'.$item->nisn) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda Yakin?')">
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