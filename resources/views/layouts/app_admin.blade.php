<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Ayateke Star Co.')}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_menu.css') }}" rel="stylesheet">
</head>
<body>
 <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: ;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: white;padding-left: 40%">
                    <!-- {{ __('Ayateke Star Co.')}} -->
                    <img src="/image/logo.png" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <!-- <li class="nav-item">
                               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> 
                            </li> -->
                        @else
                            <li class="nav-item dropdown has-sub" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-weight: bold; background-color: ;">
                                    {{ Session::get('branchName') }} | {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
        </nav>

        <main class="py-4">
            <!-- menu start -->
                <div id='cssmenu'>
                <ul>
                   <li class=""><a href='#'><span>Ibiciro</span></a></li>
                   <li class=""><a href='/userhome'><span>Abakozi</span></a></li>

                   <li class="has-sub <?php echo @$active == 'register'?"active":"" ?>"><a href='#'><span>Abafatabuguzi </span></a>
                    <ul>
                        <li class=""><a href='/client/mungo'><span>Ayo mungo</span></a></li>
                        <li class=""><a href='/client/ibigo'><span>Ayibigo</span></a></li>
                        <li class=""><a href='/client/amavomo'><span>Amavomo rusange</span></a></li>
                        <li class=""><a href='/client/search'><span>Umufatabuguzi</span></a></li>
                    </ul>
                   </li>
                   <!-- <li class="has-sub <?php echo @$active == 'exam' || @$active == 'result'?"active":"" ?>"><a href='#'><span>EXAMS</span></a>
                    <ul>
                        <li class=""><a href='#'><span>New Exam</span></a></li>
                        <li class="last"><a href='#'><span>Exam Result</span></a></li>
                    </ul>
                   </li> -->
                   <li class="has-sub <?php echo @$active == 'register'?"active":"" ?>"><a href='#'><span>Raporo </span></a>
                    <ul>
                        <li><a href='#'><span>Ayishyuwe ku munsi</span></a></li>
                        <li><a href='#'><span>Ayishyuwe ku kwezi</span></a></li>
                        <li><a href='#'><span>Umufatabuguzi</span></a></li>
                    </ul>
                   </li>
                   <!-- <li class='last'><a href='../logout.php'><span>Logout</span></a></li> -->
                </ul>
                </div>
            <!-- Menu end -->
            @yield('content')
        </main>
        
        </div>
<footer class="global-footer" >
     <!-- <hr class="global-footer__separator"> -->
        <div class="global-footer-company-links ">
             <div id="footer" style="background-color: #007bff;color: white;text-align: center">
            <small class="global-footer-company-links__copyright">&copy  Trademarks and brands are the property of their respective owners.</small><br>
                <!-- <hr class="global-footer__separator is-hidden-tablet-and-above h-mt3"> -->
                 <?php $date = date('Y');echo "2018 - ".$date; ?>
            </div>
        </div>
</footer>
<!-- <script type="text/javascript" src="{{ asset('js/jquery.full.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('js/jquery.form.js') }}"></script>
</body>
</html>
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $("#submit").click(function(e){
            e.preventDefault();
            //$('#save').attr("desabled",":true");
            $("#upload_out").html('');
            // alert($("#uploadExcel").serialize());
            // $("#upload_out").html('<img src="../images/loading.gif" alt="Uploadding"/>'); 
            $("#uploadExcel").ajaxForm({ 
                target: '#upload_out'
            }).submit();
        });
    });
</script> -->