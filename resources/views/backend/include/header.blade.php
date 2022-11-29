<nav class="navbar fixed-top">
    <div class="heading-logo">
        <img src="{{ asset('assets/backend') }}/logos/logo.png" alt="" class="main-logo">
    </div>

    <div class="d-flex align-items-center justify-content-start company-name-width">
        <div class="m-0 text-white h2 font-weight-bold mobile-c-logo-name-hide">All For Care</div>
        <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
            <i class="fa-solid fa-bars text-white"></i>
        </a>
    </div>


    <div class="navbar-right">
        <div class="header-icons d-inline-block align-middle">

            <div class="position-relative d-inline-block">
                <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-light fa-home nav-icon  text-white"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                    <a href="#" class="dropdown-item active">All Zones</a>
                    <a href="#" class="dropdown-item">Croydon</a>
                    <a href="#" class="dropdown-item">Merton</a>
                    <a href="#" class="dropdown-item">Hackney</a>
                    <a href="#" class="dropdown-item">Haringey</a>
                    <a href="" class="dropdown-item">TRANSPORT</a>
                    <a href="" class="dropdown-item">New node</a>
                </div>
            </div>
            <button class="header-icon btn btn-empty d-inline-block" type="button" >
                <i class="text-white fa-light fa-calendar"></i>
            </button>
            <button class="header-icon btn btn-empty d-inline-block" type="button" >
                <i class="text-white fa-light fa-square-info"></i>
            </button>
            <button class="header-icon btn btn-empty d-inline-block" type="button" >
                <i class="text-white fa-light fa-message"></i>
            </button>

        </div>

        <div class="user d-inline-block">
            <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                <span class="name text-white">Sarah Kortney</span>
                <span>
                            <img alt="Profile Picture" src="{{ asset('assets/backend') }}/img/profiles/l-1.jpg" />
                        </span>
            </button>

            <div class="dropdown-menu dropdown-menu-right mt-3">
                <a onclick="event.preventDefault();document.getElementById('logoutForm').submit();" class="dropdown-item" href="#">Sign out</a>
                <form action="{{route('logout')}}" id="logoutForm" method="post">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
