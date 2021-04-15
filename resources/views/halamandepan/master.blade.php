<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<meta name="description" content="pengumuman KIP SMKN 1 Karawang"/>
	<meta name="keywords" content="pengumuman KIP SMKN 1 Karawang"/>
	<meta name="copyright" content="www.mysch.id"/>	
	<meta name="author" content="www.mysch.id"/>	
	<meta name="geo.placename" content="indonesia"/>
	<meta name="geo.country" content="id"/>
	<meta name="content-language" content="id"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSS-->
	<link rel="shortcut icon" href="{{ asset('images/neskar.png') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('css/solid.css') }}">
	<link rel="stylesheet" type="text/css" href="//storage.googleapis.com/s.mysch.id/font/font.css"/>
    <!-- CSS-->
    <!-- JS-->
	<script type="text/javascript" src="//storage.googleapis.com/s.mysch.id/js/jquery.min.js"></script>			
	<script type="text/javascript" src="//storage.googleapis.com/s.mysch.id/js/ajax.js"></script>
    <!-- JS-->
	<title>KIP SMKN 1 Karawang</title>
</head>	
<body>
		<center>
		<div id="container">
			<div id="head">
				<center>
				<div class="head" style="margin-top:10px;text-align:left; padding-left: 15px">
					<div class="col-lg-2">
						<img src="{{ asset('images/neskar.png') }}" height="120px" alt="Logo" align="left" style="margin:15px 15px 0px 0px;">
					</div>
					<div class="col-lg-10">
						<span style="font-size:24px;">Informasi Program Indonesia Pintar (PIP)</span>
						<h1>SMK Negeri 1 Karawang</h1>
						<span style="font-size:18px;">Jl. Pangkal Perjuangan (By. Pass) Kec. Karawang Barat Kab. Karawang Jawa Barat Kel. Tanjungpura (41316)</span><br>
							<i class="fas fa-globe"></i> <a href="http://smkn1karawang.sch.id" target="newtab"><span style="font-size:18px;">smkn1karawang.sch.id</span></a>
							<i class="fas fa-envelope-square"></i><span style="font-size:18px;"> smkn1karawang@gmail.com</span>
							<i class="fas fa-phone-square"></i> <span style="font-size:18px;"> 08111180308</span>
						
					</div>
				</div>
				</div>
				</center>
			</div>
			<div id="menu">
				<center>
				<div class="menu">
				<nav style="float:right;display:table;width:100%;"> 
					<label for="drop" class="toggle">
						<i class="fa fa-bars fa-lg" aria-hidden="true" style="margin:10px 6px 4px 6px;" align="left"> MENU</i>
					</label>
					<input type="checkbox" id="drop" />
					<ul class="mr-auto menu3">
						<li class="nav-item"><a  class="nav-link" href="/" title="Beranda">Beranda</a></li>							
						<li class="nav-item"><a  class="nav-link" href="" title="Panduan">Panduan</a></li>
						<li class="nav-item"><a  class="nav-link" href="" title="Kontak Kami">Kontak Kami</a></li>
						<li class="nav-item"><a  class="nav-link" href="" title="Tentang Simpen">About</a></li>			
					</ul>
					 <ul class="menu3" style="float: right;">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
				</nav>			
				</div>
				</center>
			</div>
			<div id="main">
                @yield('content')
            </div>
			<div id="foot">
                <center>
                    <div class="foot">Copyright - 2021 - SMK Negeri 1 Karawang<br/>Made by : ICT SMKN 1 Karawang</div>
                </center>
            </div>
		</div>
		</center>					
	</body>