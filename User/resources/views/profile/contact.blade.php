@extends("LatifaTemplate::one-column")
@section("content")
<br>
<div class="text-center">
<h2>Contact Us</h2>
</div>
<br>
<div class="container">
<div class="col-md-6 col-md-offset-3">
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Telpon</th>
	</thead>
	@foreach($profile as $index=>$profile)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $profile->nama }}</th>
		<th>{{ $profile->telpon }}</th>
	</tr>
	@endforeach
</table>
</form>
</div>
</div>
@endsection