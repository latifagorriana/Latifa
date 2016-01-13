@extends("LatifaTemplate::one-column")
@section("content")

<div class="text-center">
<h2>Daftar Menu</h2>
<br>
<a href="/menu/create">
<button class="btn btn-primary btn-sm">
<span class="glyphicon glyphicon-plus" aria-hidden="true"> Tambah</span></button></a>
<br>
<br>
<div class="container">
<div class="col-md-12">
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>ID</th>
		<th>Nama</th>
		<th>Harga</th>
		<th>Jenis</th>
		<th>Action</th>

	</thead>
	@foreach($menu as $index=>$menu)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $menu->nama }}</th>
		<th>{{ $menu->harga }}</th>
		<th>{{ $menu->jenis }}</th>
		<th>
			
			<a href="{{ url("/daftar_menu/$menu->id/edit")}}"><button class="btn btn-success btn-sm">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>	
			<a href="{{ url("/daftar_menu/$menu->id/delete")}}"><button class="btn btn-danger btn-sm">
			<span class="glyphicon glyphicon-trash" aria-hidden="true"> Hapus</span></button></a>
		</th>
	</tr>
	@endforeach
</table>
</div>
</div>
</form>
@stop