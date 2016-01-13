@extends("LatifaTemplate::one-column")
@section('content')

<br>
<div class="text-center">
<h2>Profile</h2>
</div>
<br>
<div class="container">
<div class="col-md-6 col-md-offset-3">
<table class="table">
    <tbody>
      <tr class="warning">
		<th>Username</th>
		<td>{{ $profile->user->username }}</td>
      </tr>
      <tr class="danger">
        <th>Password</th>
		<td>{{ $profile->user->password }}</td>
      </tr>
      <tr class="success">
        <th>Level</th>
		<td>{{ $profile->user->level }}</td>
      </tr>
      <tr class="info">
        <th>Nama</th>
		<td>{{ $profile->nama }}</td>
      </tr>
      <tr class="warning">
        <th>Alamat</th>
		<td>{{ $profile->alamat }}</td>
      </tr>
      <tr class="danger">
        <th>Telpon</th>
		<td>{{ $profile->telpon }}</td>
      </tr>
      <tr class="success">
        <th>User ID</th>
		<td>{{ $profile->user_id }}</td>
      </tr>
    </tbody>
  </table>

<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary btn-sm" onclick="self.history.back()">
<span class="glyphicon glyphicon-backward" aria-hidden="true"></span>     Kembali</button>

</div>
</div>
</div>
</div>
<br>
@endsection

