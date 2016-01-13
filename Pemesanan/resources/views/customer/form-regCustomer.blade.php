@extends("LatifaTemplate::one-column")

@section("content")

        @yield("content")
<div class="text-center">
<h2>Form Registrasi Customer</h2>
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
        <label for="prodi" class="control-label col-xs-2">Alamat</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
        </div>
    </div>
    
    <div class="form-group">
        <label for="alamat" class="control-label col-xs-2">Telpon</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="telpon" placeholder="Telpon">
        </div>
    </div>
    
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr>
	<div class="form-group">
        
        <div class="col-xs-1 col-md-offset-2">
         <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Daftar</span></button>
        </div>
    </div>
</form>
@stop