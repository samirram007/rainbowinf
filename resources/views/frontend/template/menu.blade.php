<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="#">RAINBOW</a>
            <div id="close-sidebar">
                <i class="fa fa-close"></i>
            </div>
        </div>


        {{-- <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div> --}}
        <!-- sidebar-header  -->
        {{-- <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div> --}}
        <!-- sidebar-search  -->
        <div class="sidebar-menu" style="color: white">
            <ul>
                <li class="header-menu">
                    <span>General</span>
                </li>
                <li class="sidebar">
                    <a href="/">
                        <i class="fa fa-home"></i>
                        <span>Home</span>
                    </a>

                </li>

                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>About</span>
                        <i class="fa fa-chevron-circle-down pull-right" aria-hidden="true"></i>
                    </a>

                    <div class="sidebar-submenu">
                        <ul>

                            <li> <a href="{{ route('cmd') }}">From The Desk – CMD </a> </li>

                            <li><a href="{{ route('home', ['#mission']) }}"
                                    onclick="document.getElementById('close-sidebar').click();">Mission
                                    Vision </a></li>

                            <li><a href="{{ route('home', ['#management']) }}"
                                    onclick="document.getElementById('close-sidebar').click();">Management Team </a>
                            </li>

                            <li><a href="{{ route('home', ['#clientele']) }}"
                                    onclick="document.getElementById('close-sidebar').click();">Clients</a></li>

                            <li><a href="{{ route('equipments') }}">Equipments</a></li>

                            <li><a href="{{ route('corporate_office') }}">Corporate Office</a></li>

                            <li><a href="{{ route('quality_policy') }}"> Quality Policy</a></li>

                            <li><a href="{{ route('safety_policy') }}"> Safety Policy</a></li>

                            <li><a href="{{ route('registration_certificate') }}">Registration and Certificates</a></li>

                            <li><a href="{{ route('factory_infrastructure') }}">Factory Infrastructure</a></li>

                            <li><a href="{{ route('turn_over_inception') }}">Turn Over Since Inception</a></li>


                        </ul>




                    </div>
                </li>


                <li class="sidebar">
                    <a href="{{ route('home', ['#business']) }}"
                        onclick="document.getElementById('close-sidebar').click();">
                        <i class="fa fa-pie-chart" aria-hidden="true"></i>
                        <span>Our Business</span>
                    </a>

                </li>
                </li>
                <li class="sidebar"><a href="{{ route('home', ['#newsroom']) }}"
                        onclick="document.getElementById('close-sidebar').click()";> <i class="fa fa-image"></i>News
                        Room</a></li>
                <li class="sidebar"><a href="{{ route('home', ['#gallery']) }}"
                        onclick="document.getElementById('close-sidebar').click()";> <i
                            class="fa fa-image"></i>Gallery</a></li>
                <li class="sidebar"><a href="{{ route('career') }}"> <i class="fa fa-book"></i>Career</a></li>
                <li class="sidebar"><a href="{{ route('home', ['#contact']) }}"><i
                            class="fa fa-location-arrow "></i>Contact</a></li>
                <li class="sidebar"><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>Employee Login</a></li>
                <li class="sidebar"><a href="{{ route('admin.login') }}"><i class="fa fa-sign-in"></i>Admin Login</a>
                </li>








            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
        {{-- <a href="#">
            <i class="fa fa-bell"></i>
            <span class="badge badge-pill badge-warning notification">3</span>
        </a>
        <a href="#">
            <i class="fa fa-envelope"></i>
            <span class="badge badge-pill badge-success notification">7</span>
        </a>
        <a href="#">
            <i class="fa fa-cog"></i>
            <span class="badge-sonar"></span>
        </a>
        <a href="#">
            <i class="fa fa-power-off"></i>
        </a> --}}
    </div>
</nav>
