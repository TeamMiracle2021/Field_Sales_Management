<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-blue navbar-dark ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/dashboard" class="nav-link">Home</a>
        </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


<!-- ************************************************************************************************************************************* -->
<!-- User name -> Logout -->

<div class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
            {{Auth::user()->first_name }} &nbsp; {{ Auth::user()->last_name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
        </div>
    </div>

    <!-- ************************************************************************************************************************************* -->
<!-- / Logout -->


        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <!-- <a class="nav-link" data-toggle="dropdown" href="/">
                <i class="fas fa-user-circle"> Admin</i>

            </a> -->
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
{{--                <span class="dropdown-item dropdown-header">15 Notificat</span>--}}
{{--                <div class="dropdown-divider"></div>--}}
                <!-- <a href="/" class="dropdown-item">Logout
{{--                    <i class="fas fa-envelope mr-2"></i> Logout--}}
{{--                    <span class="float-right text-muted text-sm"></span>--}}
                </a> -->
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item">--}}
{{--                    <i class="fas fa-users mr-2"></i> 8 friend requests--}}
{{--                    <span class="float-right text-muted text-sm">12 hours</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item">--}}
{{--                    <i class="fas fa-file mr-2"></i> 3 new reports--}}
{{--                    <span class="float-right text-muted text-sm">2 days</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
            </div>
        </li>
        <!-- <li class="nav-item">
           <a class="nav-link" href="/">
                <p>Logout</p>
            </a>
        </li> -->
    </ul>
</nav>
<!-- /.navbar -->
