<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Volunteer-an Organization Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!----css3---->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- base:css -->

  {{-- <link rel="stylesheet" href="../css/stylechart.css"> --}}


    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <style>
        #pieChart {
          width: 500px;
          height: 500px;
          position: relative;
        }
        
        .pie {
          width: 100%;
          height: 100%;
          position: absolute;
          clip: rect(0px, 500px, 500px, 250px);
          border-radius: 50%;
          background-color: #4f6077;
        }
        
        .slice1 {
          width: 100%;
          height: 100%;
          position: absolute;
          clip: rect(0px, 250px, 500px, 0px);
          border-radius: 50%;
          background-color: #afbdd4;
        }
        
        .slice2 {
          width: 100%;
          height: 100%;
          position: absolute;
          clip: rect(0px, 500px, 500px, 250px);
          border-radius: 50%;
          background-color: #f4cc70;
        }
      </style>

</head>

<body>



    <div class="wrapper">

        <div class="body-overlay"></div>

        <!-------sidebar--design------------>
@include('partials.sidebarorg')



        <!-------page-content start----------->

        <div id="content">

           @include('partials.topbarorg')

            <!------main-content-start----------->

        @yield('content')


            <!----footer-design------------->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="footer-in">
                        <p class="mb-0">&copy 2021 Vishweb Design . All Rights Reserved.</p>
                    </div>
                </div>
            </footer>




        </div>

    </div>



    <!-------complete html----------->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('import/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('import/js/popper.min.js') }}"></script>
    <script src="{{ asset('import/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('import/js/jquery-3.3.1.min.js') }}"></script>
    <!-- base:js -->
    <script src="../../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../../js/off-canvas.js"></script>
    <script src="../../../js/hoverable-collapse.js"></script>
    <script src="../../../js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="../../../vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../../../js/chart.js"></script>
    <!-- End custom js for this page-->

    <script type="text/javascript">
        $(document).ready(function() {
            $(".xp-menubar").on('click', function() {
                $("#sidebar").toggleClass('active');
                $("#content").toggleClass('active');
            });

            $('.xp-menubar,.body-overlay').on('click', function() {
                $("#sidebar,.body-overlay").toggleClass('show-nav');
            });

        });

        let pieChart = document.getElementById('pieChart');
        let pie = document.querySelector('.pie');
        let slice1 = document.querySelector('.slice1');
        let slice2 = document.querySelector('.slice2');
      
        let angle1 = 0;
        let angle2 = 0;
      
        setInterval(function() {
          angle1 += 1;
          angle2 += 2;
          pie.style.transform = 'rotate(' + angle1 + 'deg)';
          slice1.style.transform = 'rotate(' + angle2 + 'deg)';
          slice2.style.transform = 'rotate(' + angle2 + 'deg)';
        }, 10);
    </script>
    <script>
       
      </script>





</body>

</html>
