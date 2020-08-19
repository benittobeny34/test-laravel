<div class="navbox">
        <div class="navlogo">
            <div class="logo-name"><img src="{{asset('mallow_icon.jpeg')}}" width="30px" height="30px">Mallow</div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <div class="navdiv">
            @guest
            <li class="nav-items">
                <a class="nav-links" href="{{route('login')}}">login</a>
            </li>

            <li class="nav-items">
                <a class="nav-links" href="{{route('register')}}">Register</a>
            </li>
            @else
               <li class="nav-item dropdown">

                             @role('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin') }}">{{ __('Home') }}</a>
                            </li>
                            @endrole

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            </li>
           @endguest

            <form class="search">
                <input class="input-search" type="search" placeholder="Search" aria-label="Search"></input>
            </form>
        </div>
    </div>