<nav class="navbar navbar-brand navbar-light bg-gray shadow-sm"> 
    {{--//! se elimino el nabbar-expand y se convierte en vertical C21 --}}
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> --}}
    <div class="container">
        <a  href="{{ url('/') }}">
            L I M P I A - 21
        </a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        

        <div>
            <!-- Left Side Of Navbar -->
            <ul>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul >
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li >
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li >
                            <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else


                    <li>

                        {{--  <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} s
                        </a> --}}

                        <a href="">
                            {{ Auth::user()->name }} 
                        </a>
                       
                        <div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>