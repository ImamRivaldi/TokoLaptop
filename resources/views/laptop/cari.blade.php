@extends('master')
@section('content')

<h1 style="text-align:center">[ DATA PEMBELIAN LAPTOP ]</h1>
<div style="overflow-x:scroll; overflow-y:scroll;">
	<table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>Kode Transaksi</th>
        <th>Merek</th>
        <th>Tipe</th>
        <th>Harga</th>
        <th>Jumlah Beli</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cari as $laptop)
        {{-- expr --}}
        <tr>
          <td>{{$laptop->kd_trans}}</td>
          <td>{{$laptop->merek}}</td>
          <td>{{$laptop->tipe}}</td>
          <td>{{$laptop->harga}}</td>
          <td>{{$laptop->jml_beli}}</td>
          <td>
            <a href="{{ Route('destroy', ['id' => $laptop->id]) }}" class="btn btn-danger btn-xs" >Hapus</a>
            <a href="{{ Route('edit', ['id' => $laptop->id]) }}" class="btn btn-warning btn-xs">Edit</a>
          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
</div>
@endsection
