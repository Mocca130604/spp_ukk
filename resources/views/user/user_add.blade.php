@extends('main')
@section('title','User-add')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add User</h1>
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
                            <strong class="card-title">Add User</strong>
                            <div class="pull-right">
                                <a href="{{ url('user_daftar')}}" class= "btn btn-success btn-sm">
                                    <i class= "fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <form action="{{ url('useradd') }}"  method="post">
                       @csrf
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nama Petugas</label>
                                <input type="text" name="name" class="form-control" autofocus required>
                            </div>
                            <div calss="form-group">
                                <label>Role</label>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="admin"  >
                                    <label class="form-check-label" for="exampleRadios1">
                                        Admin
                                    </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="exampleRadios2" value="petugas">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Petugas
                                    </label>
                            </div>
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