@extends('organisasi')
@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrapper">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert"> {{ session('success') }} </div>
                    @endif
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">Manage Events</h2>
                            </div>
                            <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                <a href="/eventsorg/create" class="btn btn-success">
                                    <i class="material-icons">&#xE147;</i>
                                    <span>Add New Event</span>
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
                                <th>No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Activity</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($kegiatans as $kegiatan)
                                <tr>
                                    <th><span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                            <label for="checkbox1"></label></th>
                                    <th>{{ $loop->iteration }}</th>
                                    <th>{{ $kegiatan->nama_event }}</th>
                                    <th>{{ $kegiatan->lokasi_event }}</th>
                                    <th>{{ $kegiatan->deskripsi_event }}
                                    </th>
                                    <th>
                                        <a href="/detkegiatanorg/{{ $kegiatan->id }}" class="">
                                            <i class="material-icons" data-toggle="tooltip" title="Show Detail">&#xE264;</i>
                                        </a>
                                        <a href="/eventsorg/{{ $kegiatan->id }}/edit" class="edit">
                                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                        </a>
                                        <a href="" class="delete">
                                            <form action="/eventsorg/{{ $kegiatan->id }}" method="post">
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
                        <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
                        <ul class="pagination">
                            <li class="page-item disabled"><a href="#">Previous</a></li>
                            <li class="page-item "><a href="#"class="page-link">1</a></li>
                            <li class="page-item "><a href="#"class="page-link">2</a></li>
                            <li class="page-item active"><a href="#"class="page-link">3</a></li>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!----edit-modal end--------->




        </div>
    </div>
@endsection
