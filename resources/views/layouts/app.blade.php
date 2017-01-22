<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ventanilla') }}</title>
    
    <!-- Styles -->
    {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.css')!!}
    {!!Html::style('bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css')!!}
    {!!Html::style('bower_components/bootstrap-material-design/dist/css/riples.min.css')!!}
    

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Inicio
                    </a>
                </div>

                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    @if (Auth::guest())
                    @else
                      <ul class="nav navbar-nav">
                        <li><a href="javascript:void(0)">Link</a></li>
                        <li class="dropdown">
                          <a href="javascript:void(0)" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Menu
                            <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)">Action</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Solicitudes</li>
                            <li><a href="{{ url('/clasificacionsolicitud') }}">Clasificación</a></li>
                            <li><a href="javascript:void(0)">Tipos</a></li>
                          </ul>
                        </li>
                      </ul>
                    @endif


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                
            </div>
        </nav>
        <div class="container">
            @yield('content') 
        </div>
        
    </div>
            
    <!-- Scripts -->
    {!!Html::script('bower_components/jquery/dist/jquery.js')!!}
    {!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
    {!!Html::script('bower_components/bootstrap-material-design/dist/js/riples.min.js')!!}
    {!!Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js')!!}
    
    <script type="text/javascript">
        $(document).on('ready',function(){
            $.material.init();
        })
    </script>
</body>
</html>
