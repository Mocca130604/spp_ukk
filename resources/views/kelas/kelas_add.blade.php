@extends('main')
@section('title','Kelas-add')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Kelas</h1>
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
                            <strong class="card-title">Add Kelas</strong>
                            <div class="pull-right">
                                <a href="{{ url('kelas_daftar')}}" class= "btn btn-success btn-sm">
                                    <i class= "fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <form action="{{ url('kelasadd') }}"  method="post">
                       @csrf
                            <div class="form-group">
                                <label>Pilih Kelas</label>
                                <br>
                                <select data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" name="kelas">
                                    
                                    <option value="XII">XII</option>
                                    <option value="XI">XI</option>
                                    <option value="X">X</option>   
                                
                                </select>
                            </div> 
                            
                            <div class="form-group">
                                <label>Pilih Jurusan & Nomor Kelas</label>
                                <br>
                                <select data-placeholder="Pilih Jurusan" class="standardSelect" tabindex="1" name="jurusan">
                                    
                                    <option value="RPL">RPL</option>
                                    <option value="TKJ">TKJ</option>   
                                </select>
                                <select data-placeholder="Nomor Kelas" class="standardSelect" tabindex="1" name="nomor">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option> 
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <label>angkatan</label>
                                <br>
                            <select data-placeholder="Pilih-Angakatan" class="standardSelect" tabindex="1" name="angkatan">                                    
                            @foreach($angkatan as $item)
                                    <option value={{$item->angkatan}}>{{$item->angkatan}}</option>
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