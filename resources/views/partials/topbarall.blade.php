 <!------top-navbar-start----------->

 <div class="top-navbar">
    <div class="xd-topbar">
        <div class="row">
            <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                <div class="xp-menubar">
                    <span class="material-icons text-white">signal_cellular_alt</span>
                </div>
            </div>

            <div class="col-md-5 col-lg-3 order-3 order-md-2">
                <div class="xp-searchbar">
                    <form>
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn" type="submit" id="button-addon2">Go
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                <div class="xp-profilebar text-right">
                    <nav class="navbar p-0">
                        <ul class="nav navbar-nav flex-row ml-auto">
                            <li class="dropdown nav-item active">
                                <a class="nav-link" href="#" data-toggle="dropdown">
                                    <span class="material-icons">notifications</span>
                                    <span class="notification">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">You Have 4 New Messages</a></li>
                                    <li><a href="#">You Have 4 New Messages</a></li>
                                    <li><a href="#">You Have 4 New Messages</a></li>
                                    <li><a href="#">You Have 4 New Messages</a></li>
                                </ul>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="material-icons">question_answer</span>
                                </a>
                            </li> --}}

                            <li class="dropdown nav-item">
                                <a class="nav-link" href="#" data-toggle="dropdown">
                                    <img src="{{ asset('import/img/user.jpg') }}"
                                        style="width:40px; border-radius:50%;" />
                                    <span class="xp-user-live"></span>
                                </a>
                                <ul class="dropdown-menu small-menu">
                                    <li><a href="#">
                                            <span class="material-icons">person_outline</span>
                                            Profile
                                        </a></li>
                                    <li><a href="#">
                                            <span class="material-icons">settings</span>
                                            Settings
                                        </a></li>
                                    <li> <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" style="font-size: 14px">
                                            <i class="bi bi-box-arrow-right" style="margin-right: 3px"></i>Logout
                                        </button>
                                    </form></li>

                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>

        </div>

        <div class="xp-breadcrumbbar text-center">
            <h4 class="page-title">Hello, Admin {{ auth()->user()->name }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Volunteer-an</a></li>
                {{-- <li class="breadcrumb-item active" aria-curent="page">Dashboard</li> --}}
            </ol>
        </div>


    </div>
</div>
<!------top-navbar-end----------->
