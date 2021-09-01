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
                    <li class="nav-item homelink">
                    <a class="nav-link nav-link-regular nav-link-cstm" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-regular nav-link-cstm sub-menus" href="#internet">Internet Access</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-regular nav-link-cstm sub-menus" href="#colocation">Colocation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-regular nav-link-cstm sub-menus" href="#localloop">Local Loop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-regular nav-link-cstm sub-menus" href="#vsat">VSAT</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-special nav-link-cstm" href="{{url('/register')}}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>