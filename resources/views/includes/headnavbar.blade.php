

<nav class="navbar navbar-expand-lg py-2 navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/"><i class="fa fa-fw fa-university"></i>Industrial Training Management System </a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

    </ul>
    <ul class="navbar-nav mt-4 mt-lg-0">
    <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                             <a class="nav-link" href="{{ url('/login') }}"><i class="fa fa-fw fa-user-circle-o"></i>Login</a>
                             </li>
                            <li class="nav-item">
                             <a class="nav-link" href="{{ url('/register') }}"><i class="fa fa-fw fa-pencil-square-o"></i>Register</a>
                            </li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                      <i class="fa fa-fw fa-user-circle-o"></i>{{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                      <li class="nav-item">
                                       <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();" ><i class="fa fa-fw fa-sign-out "></i>
                                                    Logout</a>

                                            <form id="logout-form" action="{{url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                      </div>

</nav>
