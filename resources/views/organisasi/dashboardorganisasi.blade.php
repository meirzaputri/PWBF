@extends('organisasi')
@section('content')
    


<div class="main-content">
    <div class="row mt-4">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Events</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>{{ $jumlahKegiatan }}</span></div>
                        </div>
                        <div class="col-auto"><i class="fa-solid fa-notes-medical fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Volunteers</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>{{ $jumlahRelawan }}</span></div>
                        </div>
                        <div class="col-auto"><i class="fa-solid fa-notes-medical fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 stretch-card mb-3">
            <div class="card shadow">
              <div class="card-body">
                <h4 class="card-title">Pie chart</h4>
                <canvas id="pieChart"></canvas>
              </div>
            </div>
        </div>
    </div>



</div>

<script src="js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="js/chart.js"></script>

@endsection
<!------main-content-end----------->
