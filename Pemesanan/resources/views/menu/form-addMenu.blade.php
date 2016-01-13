@extends("LatifaTemplate::one-column")

@section("content")

        @yield("content")
    
<br>
<div class="text-center">
<h2>Form Tambah Menu</h2>
</div>
<div class="container">
<div class="col-md-11 col-md-offset-3">
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
<hr>
<form action="{{ $url }}" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="nama" class="control-label col-xs-2">Nama</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="nama"  placeholder="Nama">
        </div>
    </div>

    <div class="form-group">
        <label for="prodi" class="control-label col-xs-2">Harga</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="harga" placeholder="Harga">
        </div>
    </div>
    
    <div class="form-group">
        <label for="pengarang" class="control-label col-xs-2">Jenis</label>
        <div class="col-xs-3">
            <select class="form-control" name="jenis">
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Minuman</option>
            </select>
        </div>
    </div>
    
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Simpan</span></button>
            <a href="/karyawan"><button type="submit" class="btn btn-warning btn-sm" onclick="self.history.back()">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"> Batal</span></button></div>
        </div>
    </div>
</form>
@stop

