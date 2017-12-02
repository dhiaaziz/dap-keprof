    <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('frontend/home') }}">TheAlgorithm</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('frontend/home') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('frontend/materi') }}">Materi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('frontend/latihan') }}">Latihan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('frontend/forum') }}">Forum</a>
                        </li>
                        <!-- <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                            </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                    </ul>
                     </ul>
                    <ul class="navbar-nav ml-auto">
                        @if (Auth::guest())
                            <li class="nav-item">
                                <a class="nav-link"href="{{url('login')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="{{url('register')}}">Register</a>
                             </li>
                        @else
                           <!--  <li class="nav-item">
                                 <a class="nav-link" href="login"></a>
                             </li> -->
                             <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href=""
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout</a>

                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="dsplay: none;">
                                        {{csrf_field()}} </form> <!-- <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> --> </div>
                        </li>
                        @endif
                    </ul>
                    <!-- <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </form> -->
                </div>
            </div>
        </nav>
    <!--/.Navbar-->
