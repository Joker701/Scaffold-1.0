 <li class="{{ set_active('users') }}">{{ link_to_route('users', 'Browse Users') }}</li>

 <ul class="nav navbar-nav navbar-right">
@if(Auth::user())
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">            
    <img src="{{ Auth::user()->img }}" class="avatar">            
    {{ Auth::user()->username }} <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" role="menu">
    <li  class="{{ set_active('statuses') }}">{{ link_to_route('statuses_path', 'Statuses') }}</li>
    <li>{{ link_to_route('profile_path', 'Your Profile', Auth::user()->username) }}</li>
    <li class="divider"></li>
    <li>{{ link_to_route('logout_path', 'Log Out') }}</li>
  </ul>
</li>
@else
<li  class="{{ set_active('register') }}">{{ link_to_route('register_path', 'Register') }}</li>
<li  class="{{ set_active('login') }}">{{ link_to_route('login_path', 'Log In') }}</li>
@endif
</ul>


 @if(! Auth::user())  
  <a href="{{ route('register_path') }}" class='btn bth-lg btn-primary btn-lg']>
    Sign Up <i class="glyphicon glyphicon-hand-right"></i>
  </a>
@endif