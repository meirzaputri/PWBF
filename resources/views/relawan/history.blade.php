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
  </head>
  <body>
   @include('partials.navbar1')

   <main id="main">
    <div class="section-title text-center" style="padding-top: 120px;">
        <p>History</p>
    </div>

    <div class="container">
    <div class="card mb-3" style="">
        <div class="row g-0">
          <div class="col-md-2 h-50">
            <img src="img/ev4.jpg" class="img-fluid rounded-start" alt="..." style="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Peduli Lingkungan</h5>
              <p class="card-text"><small class="text-muted">Presented by : Go Green!</small></p>
              <p class="card-text"><small class="" style="color: blue">On Going</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="">
        <div class="row g-0">
          <div class="col-md-2">
            <img src="img/ev1.jpg" class="img-fluid rounded-start" alt="..." style="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Peduli Pendidikan Anak</h5>
              <p class="card-text"><small class="text-muted">Presented by : Rumah Kita</p>
              <p class="card-text"><small class="" style="color:crimson">Done</small></p>
            </div>
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