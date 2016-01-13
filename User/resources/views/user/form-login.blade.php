@extends("LatifaTemplate::one-column")

@section("content")

        @yield("content")

<div class="text-center">
<h2>Form Login</h2>
</div>
<div class="container">
<div class="col-md-12 col-md-offset-4"> 
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
<form action="{{ url('/proses-login') }}" method="post" class="form-horizontal">
    
     <div class="form-group">
        <label for="username" class="control-label col-xs-1">Username</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
    </div>
    
    <div class="form-group">
        <label for="password" class="control-label col-xs-1">Password</label>
        <div class="col-xs-3">
    <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr>
    <div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-log-in" aria-hidden="true"> Login</span>
            </button>
        </div>
    </div>
</form>
@stop