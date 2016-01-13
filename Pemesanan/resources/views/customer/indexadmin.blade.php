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
	</thead>
	@foreach($customer as $index=>$customer)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $customer->nama }}</th>
		<th>
			<a href="/customers/{{ $customer->id }}"><button class="btn btn-info btn-sm">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"> Info</span></button></a>
		</th>
	</tr>
	@endforeach
</table>
</form>
@stop