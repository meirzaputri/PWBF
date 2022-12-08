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
    <title>Volunteer-an</title>
  </head>
  <body>
   @include('partials.navbar1')
   @include('partials.hero')
   <main id="main">
       @include('partials.events')
       <div class="d-grid gap-2 col-3 mx-auto">
        <button type="button" class="btn btn-outline-dark"><a href="moreevents">More Events</button>
      </div>

       <!-- ======= Team Section ======= -->
<section id="Organizations" class="Organizations">
  <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Organizations</h2>
          <p>Check Our Organizations</p>
      </div>

        <div class="row row-cols-1 row-cols-md-4 g-4">
          @foreach ($organisasi as $data)
              
          <div class="col">
            <div class="card h-100">
              <img src="{{ $data->path }}" class="card-img-top" alt="..." style="height: 150px ">
              <div class="card-body">
                <h5 class="card-title text-dark">
                  <h5 class="card-title text-dark">{{ $data->nama_organisasi }}</h5>
                  <p class="card-text text-dark">{{ $data->alamat_organisasi }}</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                  <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
        </div>
        
  </section><!-- End Team Section -->
       <div class="d-grid gap-2 col-3 mx-auto">
        <button type="button" class="btn btn-outline-dark"><a href="/moreorganization">More Organization</button>
      </div>
       
      <br>
      <br>
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