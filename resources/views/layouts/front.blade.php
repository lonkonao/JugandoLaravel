<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Intranet | Cesfam 5</title>

        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

        <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/plugins/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/plugins/dataTables/dataTables.tableTools.min.css')}}" rel="stylesheet">

    </head>

    <body>

        <div id="wrapper">

            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                                        </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">
                                IN+
                            </div>
                        </li>
                        <li>
                            <a href="/"><i class="fa fa-home"></i> <span class="nav-label">Incio</span> <span class="fa arrow"></span></a>
                        </li>
                        <li class="active">
                            <a href=""><i class="fa fa-user-md "></i> <span class="nav-label">Menu</span> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/Anexos"><i class="fa fa-phone"></i>Anexos</a></li>
                                <li><a href="/CrearAnexos"><i class="fa fa-phone"></i>Crear Anexos</a></li>
                                <li><a href=""><i class="fa fa-hospital-o"></i>Morbilidades</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                          <!-- Authentication Links -->
                          @if (Auth::guest())
                              <li><a href="{{ url('/login') }}">Ingresar</a></li>
                              <li><a href="{{ url('/register') }}">Registrar</a></li>
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
                                              Salir
                                          </a>

                                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                          @endif
                        </ul>

                    </nav>
                </div>

                @yield('content')





                <div class="footer">

                    <div>
                        <strong>Copyright</strong> FunctionTic &copy; 2017-2018
                    </div>
                </div>

            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="{{URL::asset('js/jquery-2.1.1.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
        <script src="{{URL::asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{URL::asset('js/inspinia.js')}}"></script>
        <script src="{{URL::asset('js/plugins/pace/pace.min.js')}}"></script>

        <!-- Data Tables -->
        <script src="{{URL::asset('js/plugins/dataTables/jquery.dataTables.js')}}"></script>
        <script src="{{URL::asset('js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
        <script src="{{URL::asset('js/plugins/dataTables/dataTables.responsive.js')}}"></script>
        <script src="{{URL::asset('js/plugins/dataTables/dataTables.tableTools.min.js')}}"></script>

    </body>

</html>
