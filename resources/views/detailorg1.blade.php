<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  {{-- <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
    <title>Komunitas Dongeng Indonesia</title>
  </head>
  <body>
    @include('partials.navbar1')
    <section id="hero" class="d-flex align-items-center justify-content-center" style="background-image: url('img/or10.jpg')">
        <div class="container" data-aos="fade-up">
    
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
    
            <div class="col-xl-6 col-lg-7">
              <h1>Komunitas<span> Dongeng </span>Indonesia</h1>
              <h2>- Menjadi Relawan Untuk Negeri -</h2>
    
            </div>
          </div>
    
        </div>
      </section>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">         
            <div class="section-title text-center">
                <p>About Us</p>
            </div>
            <div class="text-center" data-aos="fade-right" data-aos-delay="100">
              <p class="fst-italic">
                <b>Komunitas Dongeng Indonesia</b> Komunitas Dongeng Indonesia merupakan komunitas yang bergerak dibidang kemanusiaan dan pendidikan. Komunitas ini dibentuk pada tanggal 15 Maret 2000.
              </p>
            </div>
          </div>
    
        </div>
      </section><!-- End About Section -->
      


  
   <main id="main">
       @include('partials.events')
       <section id="documentation" class="portfolio">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Documentations</h2>
            <p>Check Our Documentations</p>
  
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
  
                <img src="img/dor1kk.jpg" class="img-fluid" alt="">
  
                <div class="portfolio-info">
                  <h4>Warm</h4>
                  <div class="portfolio-links">
                    <a href="img/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
  
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
  
                <img src="img/dor2.jpg" class="img-fluid" alt="">
  
                <div class="portfolio-info">
                  <h4>Happy U</h4>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
  
                <img src="img/dor3.jpg" class="img-fluid" alt="">
  
                <div class="portfolio-info">
                  <h4>Read The Book</h4>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
       
       
      
</main>
    @include('partials.footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>