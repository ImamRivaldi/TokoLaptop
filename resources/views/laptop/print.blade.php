<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>

  body {
    font-family: arial, sans-serif;
  }

  table {
    border: "1px";
    border-collapse: collapse;
    width: 100%;
    align: center;
  }

  td, th {
    border: 1px solid;
    text-align: center;
  }

  tr:nth-child(even)
  {
    background-color: #d6d3d3;
  }

  h1 {
    text-align: center;
  }

</style>
<body>
  <h1>[ DATA PEMBELIAN LAPTOP ]</h1>
  <table>
    <thead>
      <tr bgcolor="#b8b8b8" text-align="center" >
        <th>Kode Transaksi</th>
        <th>Merek</th>
        <th>Tipe</th>
        <th>Harga</th>
        <th>Jumlah Beli</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($laptop as $laptop)
        {{-- expr --}}
        <tr>
          <td>{{$laptop->kd_trans}}</td>
          <td>{{$laptop->merek}}</td>
          <td>{{$laptop->tipe}}</td>
          <td>{{$laptop->harga}}</td>
          <td>{{$laptop->jml_beli}}</td>
        </tr>

      @endforeach
    </tbody>
  </table>
</body>
</html>
