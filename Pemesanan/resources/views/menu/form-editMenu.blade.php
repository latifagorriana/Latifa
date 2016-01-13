@extends("LatifaTemplate::one-column")
@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-12"> 
<br>
<h2>Form Edit Menu</h2>
@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<br>
<form action="{{ $url }}" method="post" class="form-horizontal">
	
	 <div class="form-group">
        <label for="judul" class="control-label col-xs-1">Nama</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="nama" value="{{ $menu->nama }}">
        </div>
    </div>
	
    <div class="form-group">
        <label for="pengarang" class="control-label col-xs-1">Harga</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="harga" value="{{ $menu->harga }}">
        </div>
    </div>

    <div class="form-group">
        <label for="kategori" class="control-label col-xs-1">Jenis</label>
        <div class="col-xs-3">
    <select class="form-control" name="jenis">
        <option value="Makanan" {{ ($menu->jenis=='Makanan')?'selected':'' }} >Makanan</option>
        <option value="Minuman" {{ ($menu->jenis=='Minuman')?'selected':'' }} >Minuman</option>
    </select>
        </div>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<hr>
	<div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
            <button type="submit" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"> Ubah</span></button>
        </div>
    </div>
</form>
@endsection