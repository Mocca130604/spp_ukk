@extends('main')
@section('title','Transaksi')
@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Transaksi</h1>
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


                <div class="row justify-content-center">
                  <div class="col-lg-6 ">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                @endif
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Transksi</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <div class="card-title">
                                      <h3 class="text-center">Bayar SPP</h3>
                                  </div>
                                  <hr>
                                  <form action="{{ url('transaksi')}}" method="post" novalidate="novalidate">
                                    @csrf
                                      <div class="form-group text-center">
                                          <ul class="list-inline">
                                              <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                              <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                              <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                              <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                                          </ul>
                                      </div>

                                      {{-- Form Jumlah Bayar / Nama --}}
                                      <div class="form-group">
                                          <label for="cc-payment" class="control-label mb-1">NISN</label>
                                          <input id="cc-pament" name="nisn" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                      </div>
                                      {{-- end Form Jumlah Bayar / Nama --}}

                                      {{-- Form Name / Nama --}}
                                      <div class="form-group">
                                        <label for="cc-number" class="control-label mb-1">SPP</label>
                                            <select data-placeholder="Pilih angkatan" class="standardSelect" tabindex="1" name="spp">                                    
                                                @foreach($angkatan as $item)
                                                        <option value={{$item->angkatan}}>{{$item->angkatan}}</option>
                                                @endforeach          
                                            </select>
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">Jumlah Bayar</label>
                                            <input id="nama" name="nama" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                      {{-- end Form Name/ Nama--}}

                                      {{-- Form Card Number / NISN --}}
                                      {{-- end Form Card Number / NISN --}}

                                      {{-- Form Expiration / Bulan Byar --}}
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label for="cc-exp" class="control-label mb-1">Tanggal Bayar</label>
                                                  <input id="cc-exp" name="date" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
                                                  
                                              </div>
                                          </div>
                                          {{-- end Form Expiration / Bulan Byar --}}

                                          {{-- Form security code / id --}}
                                          <div class="col-6">
                                              <label for="x_card_code" class="control-label mb-1">Nis</label>
                                              <div class="input-group">
                                                <select data-placeholder="Nama Bulan" class="standardSelect" tabindex="1" name="bulan">
                                                    <option value="Belum Lunas">Belum Lunas</option>
                                                    <option value="Lunas">Lunas</option>
                                                </select>
                                                  <div class="input-group-addon">
                                                  </div>
                                              </div>
                                          </div>
                                          {{-- end Form security code / id kelas --}}
                                      </div>
                                      <div>
                                          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                              <i class="fa fa-lock fa-lg"></i>&nbsp;
                                              <span id="payment-button-amount">Pay </span>
                                              <span id="payment-button-sending" style="display:none;">Sending…</span>
                                          </button>
                                      </div>
                                  </form>
                              </div>
                          </div>

                        </div>
                    </div> <!-- .card -->

                  </div><!--/.col-->


            </div><!-- .animated -->
        </div><!-- .content -->

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#nisn").on("change", function(){
      var namasiswa = $("#nisn option:selected").attr("namasiswa");
      $("#nama").val(namasiswa);
    });

  });

</script>