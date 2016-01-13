@extends("LatifaTemplate::one-column")
@section("content")

<br>
<div class="text-center">
<h2>Data Karyawan</h2>
<br>
<div class="container">
<div class="col-md-12">
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Telpon</th>
		<th>Action</th>

	</thead>
	@foreach($profile as $index=>$profile)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $profile->nama }}</th>
		<th>{{ $profile->alamat }}</th>
		<th>{{ $profile->telpon }}</th>
		<th>
			<a href="/profile/{{ $profile->id }}"><button class="btn btn-info btn-sm">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"> Info</span></button></a>

			<a href="{{ url("/profile/$profile->id/edit")}}"><button class="btn btn-success btn-sm">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>
		</th>
	</tr>
	@endforeach
</table>
</form>
@stop