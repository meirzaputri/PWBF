@extends('admin')
@section('content')
    <div class="main-content">
        <div class="row mt-4">
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-primary py-2">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col me-2">
                                <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Organizations</span>
                                </div>
                                <div class="text-dark fw-bold h5 mb-0"><span>{{ $jumlahOrganisasi }}</span></div>
                            </div>
                            <div class="col-auto"><i class="material-icons"style="font-size:40px">diversity_3</i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-success py-2">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col me-2">
                                <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Events</span></div>
                                <div class="text-dark fw-bold h5 mb-0">{{ $jumlahRelawan }}</div>
                            </div>
                            <div class="col-auto"><i class="material-icons"style="font-size:40px">diversity_2</i></div>
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
                                <div class="text-dark fw-bold h5 mb-0">{{ $jumlahKegiatan }}</div>
                            </div>
                            <div class="col-auto"><i class="material-icons"style="font-size:40px">supervisor_account</i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <div class="text-dark fw-bold h4 mt-2 d-flex justify-content-center">Top 3 Events</div>
<div class="mb-2">
  <div class="text-dark h8 mb-0">Fauna</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="mb-2">
 <div class="text-dark h8 mb-0">Kesehatan</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="mb-2">
 <div class="text-dark h8 mb-0">Lingkungan</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="mb-2">
 <div class="text-dark h8 mb-0">Pendidikan</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="mb-2">
 <div class="text-dark h8 mb-0">Pengembangan Masyarakat</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="mb-2">
 <div class="text-dark h8 mb-0">Penanggulangan Bencana</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="mb-2">
 <div class="text-dark h8 mb-0">Seni dan Budaya</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>



        {{-- <div class="row">
            <div class="col-md-12">
                <div class="table-wrapper">

                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">Manage Organisasi</h2>
                            </div>
                            <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                    <i class="material-icons">&#xE147;</i>
                                    <span>Add New Organizations</span>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Activity</th>
                            </tr>
                        </thead>
    
                        <tbody>
                            @foreach ($organisasis as $organisasi)
                            <tr>
                                <th><span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="option[]"
                                            value="1">
                                        <label for="checkbox1"></label></th>
                                <th>{{ $organisasi->nama_organisasi }}</th>
                                <th>{{ $organisasi->email_organisasi }}</th>
                                <th>{{ $organisasi->alamat_organisasi }}</th>
                                <th>{{ $organisasi->notelp_organisasi }}</th>
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
                            <button type="button" class="btn btn-success">Delete</button> --}}
                        {{-- </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
    
            <!----edit-modal end--------->
    
    
    
    
        </div>
    </div>
    @endsection

        