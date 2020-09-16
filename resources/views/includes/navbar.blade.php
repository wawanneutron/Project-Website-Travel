  <!-- Navbar -->
  <div class="container">
    <nav class="row navbar navbar-expand-lg  navbar-light bg-white" id="home">
    <a href="{{ route('home') }}" class="navbar-logo-pealip">
    <img src="{{ url('frontend/images/pealip.PNG') }}" alt="logo pealip">
        </a>
    <a href="{{ route('home') }}" class="navbar-brand">
    <img src="{{ url('frontend/images/logo.png') }}" alt="nama PEALIP">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb"
            aria-controls="navb" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">

                <li class="nav-item mx-md-2">
                    <a class="nav-link active" href="#home">Home </a>
                </li>
                <li class="nav-item mx-md-2 ">
                    <a class="nav-link" href="#popular">Paket Travel</a>
                </li>

                <!-- dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Service
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="#testimonialHeading">Testimonial</a>
                </li>

            </ul>

            @guest
                <!-- mobile Button Masuk -->
                <form action="#" class="form-inline d-sm-block d-lg-none">
                    @csrf
                    <div class="container col-10">
                    <button class="btn btn-block btn-login-mobile my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                            Masuk
                        </button>
                    </div>
                </form>
                <!-- desktop Button Masuk -->
                <form action="#" class="form-inline my-2 my-lg-0 d-none d-lg-block">
                    @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                        Masuk
                    </button>
                </form>
            @endguest

            @auth
                <!-- mobile Button Masuk -->
                <form action="{{ url('logout') }}" class="form-inline d-sm-block d-lg-none" method="POST">
                    @csrf
                    <div class="container col-10">
                    <button class="btn btn-block btn-login-mobile my-2 my-sm-0" type="submit">
                            Keluar
                        </button>
                    </div>
                </form>
                <!-- desktop Button Masuk -->
                <form action="{{ url('logout') }}" class="form-inline my-2 my-lg-0 d-none d-lg-block" method="POST">
                    @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Keluar
                    </button>
                </form> 
            @endauth
        </div>
    </nav>
  </div>