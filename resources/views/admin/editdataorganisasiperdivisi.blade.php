@extends('topadmin')
@section('content')
    <div>
        <div class="text-center my-2">
            <h4><strong>Edit Organization</strong></h4>
        </div>
        <div class="col-lg-8">
            <form method="post" action="/orgperdiv/{{ $organisasi->id }}">
                @method('put')
                @csrf
                <input type="hidden" name="divisi_id" value="{{ $organisasi->divisi->id }}">
                <div class="mb-3">
                    <label for="nama_organisasi" class="form-label">Name</label>
                    <input type="text" class="form-control @error('nama_organisasi')is-invalid @enderror"
                        id="nama_organisasi" name="nama_organisasi" required
                        value="{{ old('nama_organisasi', $organisasi->nama_organisasi) }}">
                    @error('nama_organisasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="divisi" class="form-label">Division</label>
                    <input type="text" class="form-control @error('divisi')is-invalid @enderror"
                        id="divisi" name="divisi" required
                        value="{{ old('divisi',$organisasi->divisi->nama_divisi) }}">
                    @error('divisi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat_organisasi" class="form-label">Address</label>
                    <input type="text" class="form-control @error('alamat_organisasi')is-invalid @enderror"
                        id="alamat_organisasi" name="alamat_organisasi" required
                        value="{{ old('alamat_organisasi', $organisasi->alamat_organisasi) }}">
                    @error('alamat_organisasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email_organisasi" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email_organisasi')is-invalid @enderror"
                        id="email_organisasi" name="email_organisasi" required
                        value="{{ old('email_organisasi',$organisasi->email_organisasi) }}">
                    @error('email_organisasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="notelp_organisasi" class="form-label">Phone Number</label>
                    <input type="text" class="form-control @error('notelp_organisasi')is-invalid @enderror"
                        id="notelp_organisasi" name="notelp_organisasi" required
                        value="{{ old('notelp_organisasi',$organisasi->notelp_organisasi) }}">
                    @error('notelp_organisasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status_organisasi" class="form-label">Status</label>
                    <div class="form-check form-check-inline mb-0 me-4 @error('status_organisasi')is-invalid @enderror">
                        @error('status_organisasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <input class="form-check-input" name="status_organisasi" type="radio" name="inlineRadioOptions"
                            id="aktif" value="1" {{ old('status_organisasi', $organisasi->status_organisasi) == 1 ? 'checked' : ''  }}/>
                        <label class="form-check-label" for="aktif">Active</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" name="status_organisasi" type="radio" name="inlineRadioOptions"
                            id="tidak-aktif" value="0"  {{ old('status_organisasi', $organisasi->status_organisasi) == 0 ? 'checked' : ''  }} />
                        <label class="form-check-label" for="tidak-aktif">Inactive</label>
                        {{-- <input type="text" class="form-control" id="jk" name="jk"> --}}
                    </div>
                    
                    <div class="mb-3">
                        <label for="deskripsi_organisasi" class="form-label">Description</label>
                        <input type="textarea" class="form-control @error('deskripsi_organisasi')is-invalid @enderror"
                            id="deskripsi_organisasi" name="deskripsi_organisasi" required
                            value="{{ old('deskripsi_organisasi', $organisasi->deskripsi_organisasi) }}">
                        @error('deskripsi_organisasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                <div>
                    <button type="submit" class="btn btn-primary mb-3">Update Data</button>
            </form>
        </div>
    </div>
@endsection
