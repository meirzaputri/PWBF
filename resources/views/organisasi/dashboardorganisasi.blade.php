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
                            <div class="text-dark fw-bold h5 mb-0">jumlah</div>
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
                            <div class="text-dark fw-bold h5 mb-0">jumlah</div>
                        </div>
                        <div class="col-auto"><i class="fa-solid fa-notes-medical fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
     </div>
     
     
    
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">

                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Manage Events</h2>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addEvents" class="btn btn-success" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Add New Events</span>
                            </a>
                            <a href="#deleteEvents" class="btn btn-danger" data-toggle="modal">
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
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Volunteers</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="option[]"
                                        value="1">
                                    <label for="checkbox1"></label></th>
                            <th>Peduli Pendidikan Anak Indonesia</th>
                            <th>07 September 2021</th>
                            <th>Surabaya</th>
                            <th>100</th>
                            <th>Sedang Berjalan</th>
                            <th>
                                <a href="#editEvents" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEvents" class="delete" data-toggle="modal">
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
                            <th>Mendongeng Bersama Kak Tasya</th>
                            <th>11 Oktober 2021</th>
                            <th>Surabaya</th>
                            <th>100</th>
                            <th>Sedang Berjalan</th>
                            <th>
                                <a href="#editEvents" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEvents" class="delete" data-toggle="modal">
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
                            <th>Hari Dongeng</th>
                            <th>28 November 2021</th>
                            <th>Surabaya</th>
                            <th>100</th>
                            <th>Sedang Berjalan</th>
                            <th>
                                <a href="#edit" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEvents" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>
                    </tbody>


                </table>

                <div class="clearfix">
                    <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
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
        <div class="modal fade" tabindex="-1" id="addEvents" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Events</h5>
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
                        <button type="button" class="btn btn-success">Add</button>
                    </div>
                </div>
            </div>
        </div>

        <!----edit-modal end--------->





        <!----edit-modal start--------->
        <div class="modal fade" tabindex="-1" id="editEvents" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Events</h5>
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
                            <label>Volunteer</label>
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

        <!----edit-modal end--------->


        <!----delete-modal start--------->
        <div class="modal fade" tabindex="-1" id="deleteEvents" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Events</h5>
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
