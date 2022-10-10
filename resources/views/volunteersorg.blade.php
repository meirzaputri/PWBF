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
                            <h2 class="ml-lg-2">Volunteers</h2>
                        </div> 
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">                         
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                                <i class="material-icons">&#xE15C;</i>
                                <span>Delete</span>
                            </a>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label></th>
                            <th>ID_Volunteers</th>
                            <th>Name</th>
                            <th>Registration Date</th>
                            <th>Events</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="option[]"
                                        value="1">
                                    <label for="checkbox1"></label></th>
                            <th>VO001</th>
                            <th>Nadya Aksara</th>
                            <th>01 Maret 2021</th>
                            <th>Peduli Pendidikan Anak Indonesia</th>
                            <th>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>


                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox2" name="option[]"
                                        value="1">
                                    <label for="checkbox2"></label></th>
                                    <th>VO002</th>
                                    <th>Angga Laksana</th>
                                    <th>01 Maret 2021</th>
                                    <th>Peduli Pendidikan Anak Indonesia</th>
                            <th>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>


                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox3" name="option[]"
                                        value="1">
                                    <label for="checkbox3"></label></th>
                                    <th>VO003</th>
                                    <th>Rehan Daniel</th>
                                    <th>02 Maret 2021</th>
                                    <th>Mendongeng Bersama Kak Tasya</th>
                            <th>
                                <a href="#edit" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox3" name="option[]"
                                        value="1">
                                    <label for="checkbox3"></label></th>
                                    <th>VO004</th>
                                    <th>Boby Chandra</th>
                                    <th>02 Maret 2021</th>
                                    <th>Mendongeng Bersama Kak Tasya</th>
                            <th>
                                <a href="#edit" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox3" name="option[]"
                                        value="1">
                                    <label for="checkbox3"></label></th>
                                    <th>VO005</th>
                                    <th>Raisa Berliana</th>
                                    <th>02 Maret 2021</th>
                                    <th>Mendongeng Bersama Kak Tasya</th>
                            <th>
                                <a href="#edit" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox3" name="option[]"
                                        value="1">
                                    <label for="checkbox3"></label></th>
                                    <th>VO006</th>
                                    <th>Dhila Renatta</th>
                                    <th>02 Maret 2021</th>
                                    <th>Hari Dongeng</th>
                            <th>
                                <a href="#edit" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox3" name="option[]"
                                        value="1">
                                    <label for="checkbox3"></label></th>
                                    <th>VO007</th>
                                    <th>Francissca Alexandria</th>
                                    <th>02 Maret 2021</th>
                                    <th>Hari Dongeng</th>
                            <th>
                                <a href="#edit" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox3" name="option[]"
                                        value="1">
                                    <label for="checkbox3"></label></th>
                                    <th>VO008</th>
                                    <th>Kevin Smith</th>
                                    <th>02 Maret 2021</th>
                                    <th>Hari Dongeng</th>
                            <th>
                                <a href="#edit" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>
                    </tbody>


                </table>

                <div class="clearfix">
                    <div class="hint-text">showing <b>8</b> out of <b>25</b></div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item active"><a href="#"class="page-link">1</a></li>
                        <li class="page-item "><a href="#"class="page-link">2</a></li>
                        <li class="page-item "><a href="#"class="page-link">3</a></li>
                        <li class="page-item "><a href="#"class="page-link">4</a></li>
                        <li class="page-item "><a href="#"class="page-link">5</a></li>
                        <li class="page-item "><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>









            </div>
        </div>


        <!----add-modal start--------->
        <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Employees</h5>
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
                            <label>Email</label>
                            <input type="emil" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success">Add</button>
                    </div>
                </div>
            </div>
        </div>

        <!----edit-modal end--------->





        <!----edit-modal start--------->
        <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
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
                            <label>Email</label>
                            <input type="emil" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
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

        <!----edit-modal end--------->


        <!----delete-modal start--------->
        <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Employees</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this Records</p>
                        <p class="text-warning"><small>this action Cannot be Undone,</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!----edit-modal end--------->




    </div>
</div>
@endsection
<!------main-content-end----------->
