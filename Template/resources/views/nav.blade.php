<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    @if (Auth::guest())
    </div>
      <ul class="nav navbar-nav">
        
      </ul>

    @elseif(Auth::user()->level=="karyawan")
      
         </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
           <a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><font color="#B6B6B6">    Lists    </font><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/users"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><font color="black">     My Account</font></a></li>
                  <li><a href="/karyawan"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><font color="black">     My Profile</font></a></li>          
                </ul>
        <li><a href="/customer/register">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span><font color="#B6B6B6">   Register Customer</font></a></li>
        <li><a href="/customers"><font color="#B6B6B6"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>      Customers</font><span class="sr-only"></span></a></li>
        <li><a href="/lihatmenu"><font color="#B6B6B6"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>      Menu</font><span class="sr-only"></span></a></li>
      </ul>
    
   @else
   
  
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
           <a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><font color="#B6B6B6">    Lists    </font><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/users"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><font color="black">     Users</font></a></li>
                  <li><a href="/karyawan"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><font color="black">     Karyawan</font></a></li>          
                  <li><a href="/daftar_customer"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><font color="black">     Customers</font></a></li>
                </ul>
        <li><a href="/daftar_menu"><font color="#B6B6B6"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>      Menu</font><span class="sr-only"></span></a></li>
      </ul>
    @endif

      <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
          <li><a href="/listmenu">
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><font color="#B6B6B6">   Daftar Menu</font></a></li>
          <li><a href="/contact">
            <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><font color="#B6B6B6">   Contact Us</font></a></li>
            <li><a href="/auth/login">
            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span><font color="#B6B6B6">  Login</font></a></li>

          @else
            <li><a>
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span><font color="#B6B6B6">
            Hello</font> <font color ="yellow">{{ Auth::user()->username }}</font></a></li>
            
            <li><a href="/auth/logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span><font color="#B6B6B6"><font color="#B6B6B6">  Logout</font></font></a></li>
          @endif
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>