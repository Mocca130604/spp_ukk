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
                                <a href="{{ url('kelas_daftar')}}" class= "btn btn-success btn-sm">
                                    <i class= "fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <form action="{{ url('kelasedit/'.$kelasedit->id_kelas) }}"  method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                                <label>Pilih Kelas</label>
                                <br>
                                <select data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" name="kelas">
                                    <option value="XII" {{ $kelasedit->kelas == 'XII' ? 'selected':'' }}>XII</option>
                                    <option value="XI" {{ $kelasedit->kelas == 'XI' ? 'selected':'' }}>XI</option>
                                    <option value="X" {{ $kelasedit->kelas == 'X' ? 'selected':'' }}>X</option>
                                    
                                </select>
                            </div> 
                            
                            <div class="form-group">
                                <label>Pilih Jurusan & Nomor Kelas</label>
                                <br>
                                <select data-placeholder="Pilih Jurusan" class="standardSelect" tabindex="1" name="jurusan">
                                    <option value="RPL" {{ $kelasedit->jurusan == 'RPL' ? 'selected':'' }}>RPL</option>
                                    <option value="TKJ" {{ $kelasedit->jurusan == 'TKJ' ? 'selected':'' }}>TKJ</option>   
                                </select>
                                <select data-placeholder="Nomor Kelas" class="standardSelect" tabindex="1" name="nomor">
                                    <option value="1" {{ $kelasedit->nomor_kelas == '1' ? 'selected':'' }}>1</option>
                                    <option value="2" {{ $kelasedit->nomor_kelas == '2' ? 'selected':'' }}>2</option>
                                    <option value="3" {{ $kelasedit->nomor_kelas == '3' ? 'selected':'' }}>3</option>
                                    <option value="4" {{ $kelasedit->nomor_kelas == '4' ? 'selected':'' }}>4</option>
                                    <option value="5" {{ $kelasedit->nomor_kelas == '5' ? 'selected':'' }}>5</option>
                                    <option value="6" {{ $kelasedit->nomor_kelas == '6' ? 'selected':'' }}>6</option>
                                    <option value="7" {{ $kelasedit->nomor_kelas == '7' ? 'selected':'' }}>7</option>
                                    <option value="8" {{ $kelasedit->nomor_kelas == '8' ? 'selected':'' }}>8</option>
                                    <option value="9" {{ $kelasedit->nomor_kelas == '9' ? 'selected':'' }}>9</option>
                                    <option value="10" {{ $kelasedit->nomor_kelas == '10' ? 'selected':'' }}>10</option>
                                    <option value="11" {{ $kelasedit->nomor_kelas == '11' ? 'selected':'' }}>11</option>
                                    <option value="12" {{ $kelasedit->nomor_kelas == '12' ? 'selected':'' }}>12</option>
                                </select>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <label>Angkatan</label>
                                <input type="text" name="angkatan" value="{{ $kelasedit->angkatan }}" class="form-control" autofocus required>
                            </div>
                            <button type="submit" class="btn btn-success"> Save </button>
                                </div>    
                                        
                                </div>
                        </form>
                
                </div>
            </div>
        </div>
    </div>
</div>  

                
@endsection