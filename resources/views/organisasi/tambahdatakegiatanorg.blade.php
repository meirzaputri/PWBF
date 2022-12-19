@extends('organisasi')
@section('content')
    <div>
        <div class="text-center my-2">
            <h4><strong>Add Volunteer</strong></h4>
        </div>
        <div class="col-lg-8">
            <form method="post" action="/eventsorg">
                @csrf
                <div class="mb-3">
                    <label for="nama_event" class="form-label">Event Name</label>
                    <input type="text" class="form-control @error('nama_event')is-invalid @enderror" id="nama_event"
                        name="nama_event" required value="{{ old('nama_event') }}">
                    @error('nama_event')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tglmulai_event" class="form-label">Start Date</label>
                    <input type="date" class="form-control @error('tglmulai_event')is-invalid @enderror"
                        id="tglmulai_event" name="tglmulai_event" required value="{{ old('tglmulai_event') }}">
                    @error('tglmulai_event')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tglberakhir_event" class="form-label">End Date</label>
                    <input type="date" class="form-control @error('tglberakhir_event')is-invalid @enderror"
                        id="tglberakhir_event" name="tglberakhir_event" required value="{{ old('tglberakhir_event') }}">
                    @error('tglberakhir_event')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi_event" class="form-label">Description</label>
                    <input type="textarea" class="form-control @error('deskripsi_event')is-invalid @enderror"
                        id="deskripsi_event" name="deskripsi_event" required value="{{ old('deskripsi_event') }}">
                    @error('deskripsi_event')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="lokasi_event" class="form-label">Location</label>
                    <input type="text" class="form-control @error('lokasi_event')is-invalid @enderror" id="lokasi_event"
                        name="lokasi_event" required value="{{ old('lokasi_event') }}">
                    @error('lokasi_event')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3                        ">
                    <label for="status_event" class="form-label">Status</label>
                    <div class="form-check form-check-inline mb-0 me-4 @error('status_event')is-invalid @enderror">
                        @error('status_event')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <input class="form-check-input" name="status_event" type="radio" name="inlineRadioOptions"
                            id="femaleGender" value="1" />
                        <label class="form-check-label" for="active">Active</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" name="status_event" type="radio" name="inlineRadioOptions"
                            id="done" value="0" />
                        <label class="form-check-label" for="maleGender">Done</label>
                        {{-- <input type="text" class="form-control" id="jk" name="jk"> --}}
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary mb-3">Add Data</button>
            </form>
        </div>
    </div>
@endsection
