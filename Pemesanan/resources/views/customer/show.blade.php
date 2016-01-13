@extends("LatifaTemplate::one-column")
@section('content')

<br>
<div class="text-center">
<h2>Detail Customer</h2>
</div>
<br>
<div class="container">
<div class="col-md-6 col-md-offset-3">
<table class="table">
    <tbody>
      <tr class="warning">
		<th>Nama</th>
		<td>{{ $customer->nama }}</td>
      </tr>
      <tr class="danger">
        <th>Alamat</th>
		<td>{{ $customer->alamat }}</td>
      </tr>
      <tr class="success">
        <th>Telp</th>
		<td>{{ $customer->telpon }}</td>
      </tr>
    </tbody>
  </table>

<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary btn-sm" onclick="self.history.back()">
<span class="glyphicon glyphicon-backward" aria-hidden="true"></span>     Kembali</button>
<br>
</div>
<br>
</div>
</div>
</div>
</div>
<br>
@endsection

