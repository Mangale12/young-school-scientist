<section class="header">

    <div class="header__navbar py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="index.html"><img src="{{asset('teacher/assets/images/logo.png')}}" alt="logo" height="70" class="center-image"></a>
                <nav class="header__navbar--left header__navbar--right">
                    <ul class="d-flex align-items-center">

                        {{-- <li class="dropdown">
                            <a href="Quarky .html">Open Resourses </a>
                            <ul class="dropdown-menu">
                                <li><a href="Quarky .html">Quarky </a></li>
                                <li><a href="elementry.html">Quarky </a></li>
                                <li><a href="Quarky .html">Quarky </a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="Quarky .html">Courses </a>
                            <ul class="dropdown-menu">
                                <li><a href="summber-camp.html">Quarky </a></li>
                                <li><a href="winter-camp.html">Quarky </a></li>
                                <li><a href="after-school.html">Quarky </a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="Quarky .html">Projects </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Quarky </a></li>
                                <li><a href="#">Quarky </a></li>
                                <li><a href="#">Quarky </a></li>

                            </ul>
                        </li>
                   
                        <li class="dropdown">
                            <a href="Quarky .html">Group Management </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Quarky </a></li>
                                <li><a href="#">Quarky </a></li>
                                <li><a href="#">Quarky </a></li>

                            </ul>
                        </li> --}}
                        {{-- <li>
                            <a href="Quarky .html">Logout </a>
                        </li> --}}
                        <li class="dropdown dropdown-center">
                            <a> <i class="fa-regular fa-bell"></i></a>
                            <ul class="dropdown-menu ">
                                <li><a href="#">Notification First</a></li>
                                <li><a href="#">Quarky </a></li>
                                <li><a href="#">Quarky </a></li>

                            </ul>
                        </li>

                        <li class="dropdown dropdown-center">
                            <a class="d-flex align-items-center justify-content-end"> {{ Auth::user()->email }} &nbsp; <span
                                    class="avatar">DM</span></a>
                            <ul class="dropdown-menu ">
                                {{-- <li><a href="#"><i class="fa-regular fa-address-book"></i> &nbsp; My Courses</a>
                                </li>
                                <li><a href="#"><i class="fa-regular fa-chess-rook"></i> &nbsp; My Certificates</a>
                                </li> --}}
                                <li><a href="#"><i class="fa-regular fa-id-badge"></i> &nbsp; Profile</a></li>
                                <li><a href="#"> <i class="fa-solid fa-file-invoice"></i> &nbsp; Account</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" style="background-color: #f18500; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;width:100%;">
                                            Logout
                                        </button>
                                    </form>
                                </li>

                            </ul>
                        </li>
                    </ul>

                </nav>



            </div>
        </div>
    </div>
</section>