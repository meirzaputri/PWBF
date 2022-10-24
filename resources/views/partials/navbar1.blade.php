
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="/">Volunteer-an<span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0 sticky-top">
        <ul>
          <li><a class="nav-link scrollto active" href="/volunteers">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">About</a></li>
          <li><a class="nav-link scrollto" href="/moreevents">Events</a></li>
          <li><a class="nav-link scrollto " href="/moreorganization">Organization</a></li>
          <li><a class="nav-link scrollto" href="/documentation">Documentation</a></li>
          <li><a class="nav-link scrollto" href="/contactus">Contact</a></li>        

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <li class="nav-item dropdown nav-link">
        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{Auth::user()->name}}
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="/login">Logout</a></li>
        </ul>
      </li>

    </div>
  </header><!-- End Header -->
