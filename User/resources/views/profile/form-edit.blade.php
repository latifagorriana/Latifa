@extends("LatifaTemplate::one-column")

@section("content")

        @yield("content")

<div class="text-center">
<h2>Form Ubah Profile</h2>
</div>
<div class="container">
<div class="col-md-8 col-md-offset-4"> 
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
        <label for="password" class="control-label col-xs-2">Nama</label>
        <div class="col-xs-4">
    <input type="text" class="form-control" name="nama" value="{{ $profile->nama}}">
        </div>
    </div>
    
     <div class="form-group">
        <label for="password" class="control-label col-xs-2">Alamat</label>
        <div class="col-xs-4">
    <input type="text" class="form-control" name="alamat" value="{{ $profile->alamat}}">
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="control-label col-xs-2">Telpon</label>
        <div class="col-xs-4">
    <input type="text" class="form-control" name="telpon" value="{{ $profile->telpon}}">
        </div>
    </div>

    <hr>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="password" class="control-label col-xs-2"></label>
        <div class="col-xs-3">
        <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-refresh" aria-hidden="true"> Ubah</span></button>
        </div>
    </div>
</form>
@stop
