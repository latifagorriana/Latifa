@extends("LatifaTemplate::one-column")
@section('content')
<br>
</br>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-danger">
				<div class="panel-heading"><strong>Warning!</strong></div>

				<div class="panel-body">
				Wrong Combination Username & Password!<br>
				<a href="/auth/login" class="alert-link">Try again</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection