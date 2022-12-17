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
    <title>Organization</title>
  </head>
  <body>
   @include('partials.navbar1')                   
</main>
    <!-- ======= Team Section ======= -->
<section id="MoreOrganizations" class="MoreOrganizations">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Organizations</h2>
            <p>Check Our Organizations</p>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4">
          @foreach( $organisasis as $organisasi)
            <div class="col">
              <div class="card h-100">
                <img src="{{ $organisasi->path }}" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">{{ $organisasi->nama_organisasi }}</h5>
                  <p class="card-text">{{ $organisasi->alamat_organisasi}}</p>
                </div>
                @endforeach
                <div class="card-footer d-flex justify-content-center">
                    <a class="btn btn-warning" href="detailorg1" role="button">Explore</a>
                </div>
              </div>
            </div>
        
          </div>
{{-- BARIS 2 --}}
        {{-- <div class="row row-cols-2 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="/img/catvol1.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">Cat Lovers</h5>
                  <p class="card-text">Sebuah komunitas yang berdiri pada 07 April 2020 dengan tujuan utama melindungi kucing-kucing liar</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/img/rumahkita.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">Rumah Kita</h5>
                  <p class="card-text">Organisasi dengan lebih dari 500 anggota dari seluruh daerah di Indonesia yang berusaha untuk memberikan kenyamanan bagi mereka yang membutuhkan</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/img/helpinghand.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">Helping Hands</h5>
                  <p class="card-text">Sebuah komunitas yang berfokus pada penggalangan donasi untuk korban bencana alam</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/img/friends.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">FRIENDS</h5>
                  <p class="card-text">"Menjadi teman dikala semua menjauh" merupakan tujuan dari komunitas yang kami buat</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
          </div> --}}

{{-- BARIS 3 --}}          
        {{-- <div class="row row-cols-3 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="/img/ev5.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">Eco Warriors</h5>
                  <p class="card-text">Komunitas dengan slogan "Menjadi penyelamat bumi". Komunitas ini berdiri dengan alasan semakin menurunnya tingkat kesadaran manusia dalam menjaga kelestarian lingkungan</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/img/happytail.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">Happy Tails</h5>
                  <p class="card-text">Komunitas pecinta hewan yang memiliki fokus utama memberikan kenyamanan, keamanan, dan kesejahteraan bagi hewan</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/img/theshinelib.jpeg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">The Shine Library</h5>
                  <p class="card-text">Organisasi yang memiliki fokus kegiatan di bidang edukasi kepada anak-anak. Organisasi ini telah membangun lebih dari 25 perpustakaan mini untuk anak-anak di desa terpencil</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/img/superkids.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">SuperKids</h5>
                  <p class="card-text">Organisasi dengan tujuan utama memberikan pendidikan dan edukasi kepada anak-anak jalanan</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
          </div>
{{-- BARIS 4 --}}
        {{-- <div class="row row-cols-4 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="/img/kidnesscrew.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">Kindness Crew</h5>
                  <p class="card-text">Merupakan salah satu organisasi dengan anggota lebih dari 500 anggota. Tujuan utama dari organisasi ini adalah menebarkan secuil kebaikan pada setiap orang yang membutuhkannya</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/img/paw.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">Pawsome</h5>
                  <p class="card-text">Organisasi pecinta kucing dengan fokus utama memberikan rumah bagi kucing-kucing liar</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/img/walkingtogether.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">Walking Together</h5>
                  <p class="card-text">Merupakan organisasi dengan fokus utama di bidang kesejahteraan bersama</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/img/WAV.jpg" class="card-img-top" alt="..." style="height: 150px ">
                <div class="card-body">
                  <h5 class="card-title">WAV</h5>
                  <p class="card-text">"We Are Volunteer" merupakan organisasi yang terdapat di 80 daerah dan memiliki lebih dari 1500 anggota aktif sebagai volunteer dalam kegiatan-kegiatan yang dilaksanakan oleh organisasi ini.</p>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-warning">Explore</button>
                </div>
              </div>
            </div>
          </div> --}} 

    </div>
</section><!-- End Team Section -->
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