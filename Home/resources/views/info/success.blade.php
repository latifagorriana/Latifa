@extends("LatifaTemplate::one-column")
@section('content')
<br>
</br>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-success">
				<div class="panel-heading"><strong>Login Success !</strong></div>

				<div class="panel-body">
				You're Logged in as <font color="green">{{ Auth::user()->username }}</font>
				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection