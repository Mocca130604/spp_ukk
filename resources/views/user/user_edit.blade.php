@extends('main')
@section('title','User-edit')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>edit User</h1>
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
                            <strong class="card-title">Edit User</strong>
                            <div class="pull-right">
                                <a href="{{ url('user_daftar')}}" class= "btn btn-success btn-sm">
                                    <i class= "fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <form action="{{ url('useredit/'.$useredit->id_petugas) }}"  method="post">
                        @method('patch')
                        @csrf
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="{{ $useredit->username }}" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" value="{{ $useredit->password }}" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nama Petugas</label>
                                <input type="text" name="name" value="{{ $useredit->nama_petugas }}" class="form-control" autofocus required>
                            </div>
                            
                            <div class="form-group">
                                    <label for="jenis_kelamin">Role</label> <br>
                                <div class="form-check form-check-inline">
                                    <label for="jenis_kelamin">
                                        <input type="radio" name="role" value="admin" id="role" {{$useredit->level == 'admin'? 'checked' : ''}} >Admin
                                        <input type="radio" name="role" value="petugas" id="role" {{$useredit->level == 'petugas'? 'checked' : ''}} >Petugas
                                    </label>
                                    </div>
                                </div>
                                        
                                          
                                        <button type="submit" class="btn btn-success"> Save </button>
                                </div>
                        </form>
                
                </div>
            </div>
        </div>
    </div>
</div>  

                
@endsection