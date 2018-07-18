@extends('Master')
@section('content')
  <form class="form-horizontal" action="{{ Route('store') }}" method="post">
    <fieldset>
      @csrf

      <div class="form-group">
        <label class="col-md-2 control-label" for="kd_trans">Kode Transaksi</label>
        <div class="col-md-6">
          <input name="kd_trans" type="text" placeholder="Kode Transaksi" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="merek">Merek</label>
        <div class="col-md-6">
          <input name="merek" type="text" placeholder="Merek" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="tipe">Tipe</label>
        <div class="col-md-6">
          <input name="tipe" type="text" placeholder="Tipe" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="harga">Harga</label>
        <div class="col-md-6">
          <input name="harga" type="text" placeholder="Harga" class="form-control">
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-2 control-label" for="jml_beli">Jumlah Beli</label>
        <div class="col-md-6">
          <input name="jml_beli" type="text" placeholder="Jumlah Beli" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8 text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </fieldset>


  </form>
@endsection