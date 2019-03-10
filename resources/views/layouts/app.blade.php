<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/projects/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>



    @yield('head')


</head>
<body>

<div class="header">
    <div class="container">
      <div align="left">
        <img src="/images/parkmeIN.png" width="300" height="160" align="left">
      </div>
    </div>
</div>
 <div class="header">
      <div class="container">
            <div class="nav">
                 <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/twowheelers">Two Wheelers</a></li>
                    <li><a href="/fourwheelers">Four Wheelers</a></li>
                    <li><a href="/notice">Notice</a></li>
                     @guest
                    
                            <li style="float: right;">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li style="float: right;">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li style="float: right; color: black;" >
                            
                            </li>
                            <li>
                                <div>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
            </div>
      </div>
</div>
    
                       
                    </ul>
                </div>
            </div>
        </nav>

            @yield('content')
    </div>
</body>
</html>
