@inject("menu","Latifa\Pemesanan\Entity\Eloquent\Menu")
@extends("LatifaTemplate::one-column")

@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-9 col-md-offset-1"> 
<br>
<div class="text-center">
<h2>Form Pemesanan</h2>
</div>

<br>
	<table class="table table-striped table-bordered table-hover table-condensed ">
    <form action="{{ $url }}" method="post" class="form-horizontal">
	<thead>
        <th> <div class="form-group">
        <label for="nama" class="control-label col-xs-2">Nama</label>
    </div></th>
        <th><div class="col-xs-5">
             <p class="form-control-static">{{ $customer->nama }}</p>
        </div></th>
       </thead>
       <thead>
       <th> <div class="form-group">
        <label for="prodi" class="control-label col-xs-5">Waktu Pemesanan</label></div></th>
    <th><div class="col-xs-5">
    <p class="form-control-static">{{ $customer->waktu_pesan }}</p>
        </div></th>
    </thead>
   <thead>
        <td>
         <div class="form-group">
                <label for="menu" class="control-label col-xs-5">Pilih Menu</label>
        </td>
        <td>
            <div class="col-lg-20">
                @foreach ($list_menu as $menu)
                <input type="checkbox" name="menu[]"
                @if($customer->menu !=null)
                @if($customer->menu->contains($menu->id))
                checked
                @endif
                @endif

                value="{{ $menu->id }}">  {{ $menu->nama }} <br>  
                @endforeach
                </div>
                </div>
        </td>
   </thead>
        
    

   
        
</table>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<hr>
	<div class="form-group">
        <div class="col-xs-offset-5">
            <button type="submit" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Simpan</span></button>
            <a href="/karyawan"><button type="submit" class="btn btn-warning btn-sm" onclick="self.history.back()">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"> Batal</span></button></div>
        </div>
    </div>
</form>

@stop