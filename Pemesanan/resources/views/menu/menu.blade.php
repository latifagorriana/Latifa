@extends("LatifaTemplate::one-column")
@section("content")

<br>
<div class="text-center">
<h2>Daftar Menu</h2>
</div>
<br>
<div class="container">
<div class="col-md-6 col-md-offset-3">
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>ID</th>
		<th>Nama</th>
		<th>Harga</th>

	</thead>
	@foreach($menu as $index=>$menu)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $menu->nama }}</th>
		<th>{{ $menu->harga }}</th>
	</tr>
	@endforeach
</table>
</div>
</div>
</form>
@stop