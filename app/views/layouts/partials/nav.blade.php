<nav class="navbar navbar-inverse navbar-fixed-top header-background">
  <div class="container">
  <div class="row">
    <h3>&nbsp;<a class="site-name" href="{{ route('home') }}">Site Name</a>
      <small>
        <a class="pull-right cart-link" href="/store/cart"><i class="glyphicon glyphicon-shopping-cart"></i>
          &nbsp;
        </a> 
      </small>
    </h3>    
  </div>
  <div class="row border-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ set_active('/') }}">{{ link_to_route('home', 'Home') }}</li> 
        <li class="{{ set_active('right') }}">{{ link_to_route('right', 'Right-Sidebar') }}</li> 
        <li class="{{ set_active('left') }}">{{ link_to_route('left', 'Left-Sidebar') }}</li>           
      </ul>

       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="javaxcript:;" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span><span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">      
            @if (Auth::check())
              <li class="{{ set_active('profile') }}">
                <a href="">
                  Home
                </a>
              </li>
              <li>{{ link_to_route('logout_path', 'Log Out') }}</li>
            @else
              <li  class="{{ set_active('login') }}">{{ link_to_route('login_path', 'Log In') }}</li>
              <li  class="{{ set_active('register') }}">{{ link_to_route('register_path', 'Register') }}</li>
             <!--  <li>
                <a href="javascript:;" data-toggle="modal" data-target="#contactModal">
                  Contact Us
                </a>
            </li>  -->
            @endif 
          </ul>
        </li>
      </ul>
      
      </div>
      </div>
  </div>
</nav>