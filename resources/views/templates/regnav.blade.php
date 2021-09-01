<nav class="navbar navbar-dark fixed-top navbar-expand-sm bg-cstm stay">
        <div class="nav-border stay"></div>
        <div class="container wrapping">
            <a class="navbar-brand" href="{{route('index')}}">
                <img class="logo stay" src="{{asset('assets/images/logo.png')}}">
            </a>
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menus">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link nav-link-regular nav-link-cstm" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-regular nav-link-cstm" href="{{url('/#about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-regular nav-link-cstm" href="{{url('/#product')}}">Products</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-regular nav-link-cstm dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Support
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                            <a class="dropdown-item" href="http://eticket.akpa.net.id" target="_blank">E-Tikect</a>
                            <a class="dropdown-item" href="http://speed.akpa.net.id" target="_blank">Speedtest</a>
                            <a class="dropdown-item" href="http://akpa.net.id/webmail" target="_blank">Mail</a>
                            <a class="dropdown-item" href="http://cacti.akpa.net.id" target="_blank">MRTG</a>
                        </div>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-special nav-link-cstm" href="{{url('/register')}}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>