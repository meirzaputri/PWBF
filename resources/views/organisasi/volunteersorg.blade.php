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
                            <h2 class="ml-lg-2">Manage Volunteers</h2>
                        </div> 
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">  
                            <a href="/volunteersorg/create" class="btn btn-success">
                                <i class="material-icons">&#xE147;</i>
                                <span>Add New Volunteer</span>
                            </a>                       
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
                      @foreach ($relawans as $relawan)
                      <tr>
                        <th><span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="option[]"
                                    value="1">
                                <label for="checkbox1"></label></th>
                        <th>{{ $relawan->id }}</th>
                        <th>{{ $relawan->nama_relawan }}</th>
                        <th>{{ $relawan->created_at }}</th>
                        <th>{{ $relawan->email_relawan }}</th>
                        <th>
                            <a href="/detrelawanorg/{{ $relawan->id }}" class="">
                                <i class="material-icons" data-toggle="tooltip" title="Show Detail">&#xE264;</i>
                            </a>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip"
                                    title="Edit">&#xE254;</i>
                            </a>
                            <a href="" class="delete">
                                <form action="/relawansorg/{{ $relawan->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="material-icons border-0 bg-color:transparent"
                                        onclick="return confirm('Are you sure to delete this data?')"
                                        data-toggle="tooltip" title="Delete">&#xE872;</button>
                                </form>
                            </a>
                        </th>
                    </tr>
                      @endforeach
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
