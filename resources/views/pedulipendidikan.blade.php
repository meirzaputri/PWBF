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


    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

</head>

<body>



    <div class="wrapper">

        <div class="body-overlay"></div>

        <!-------sidebar--design------------>
@include('partials.sidebarorg')
@extends('organisasi')
@section('content')
    
<div class="main-content">  
    
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">

                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Peduli Pendidikan Anak Indonesia</h2>
                        </div> 
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">                         
                            <a href="#editEvents" class="btn btn-warning" data-toggle="modal">
                                <i class="material-icons">edit</i>
                                <span>Edit</span>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                     Name
                    </div>
                    <div class="card-body">
                      <p class="card-text">Peduli Pendidikan Anak Indonesia</p>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-header">
                     Date
                    </div>
                    <div class="card-body">
                      <p class="card-text">07 September 2021</p>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-header">
                     Location
                    </div>
                    <div class="card-body">
                      <p class="card-text">Surabaya</p>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-header">
                     Description
                    </div>
                    <div class="card-body">
                      <p class="card-text">Gerakan Peduli Pendidikan Anak Indonesia merupakan aksi nyata yang dapat dilakukan oleh volunteer untuk memberikan pendidikan yang layak bagi anak-anak di Indonesia, khususnya di daerah terpencil</p>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-header">
                     Volunteers
                    </div>
                    <div class="card-body">
                      <p class="card-text">100 volunteers</p>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-header">
                     Oprec Volunteers
                    </div>
                    <div class="card-body">
                      <p class="card-text">01-30 March 2021</p>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-header">
                     Interview
                    </div>
                    <div class="card-body">
                      <p class="card-text">01-25 April 2021 </p>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-header">
                     Announcement
                    </div>
                    <div class="card-body">
                      <p class="card-text">30 April 2021</p>
                    </div>
                  </div>

        <!----edit-modal start--------->
        <div class="modal fade" tabindex="-1" id="editEvents" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Employees</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="emil" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Volunteers</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Oprec Volunteer</label>
                            <input type="emil" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Interview Date</label>
                            <input type="emil" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Announcement</label>
                            <input type="emil" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
<!------main-content-end----------->
