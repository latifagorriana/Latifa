@extends("LatifaTemplate::one-column")
@section("content")
<br>

<div class="text-center">
<h2>Data Customer</h2>
<br>
<div class="container">
<div class="col-md-12">
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Opsi</th>
		<th>Operasi</th>
	</thead>
	@foreach($customer as $index=>$customer)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $customer->nama }}</th>
		<th>
			<a href="/customers/{{ $customer->id }}"><button class="btn btn-info btn-sm">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"> Info</span></button></a>
			<a href="{{ url("/customers/$customer->id/edit")}}"><button class="btn btn-danger btn-sm">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>
			<a href="{{ url("/customers/$customer->id/delete")}}"><button class="btn btn-success btn-sm">
			<span class="glyphicon glyphicon-trash" aria-hidden="true"> Hapus</span>
			</button></a>	
		</th>
		<th>
			<a href="{{ url("/customers/$customer->id/pesan")}}"><button class="btn btn-primary btn-sm">
			<span class="glyphicon glyphicon-new-window" aria-hidden="true"> Pemesanan</span></button></a>	
		</th>
	</tr>
	@endforeach
</table>
</form>
@stop