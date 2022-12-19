@extends('organisasi')
@section('content')
<div>
    <div class="text-center my-2">
        <h4><strong>Add Volunteer</strong></h4>
    </div>
    <div class= "col-lg-8">
    <form method="post" action="/volunteersorg">
        @csrf
        <div class="mb-3">
          <label for="nama_relawan" class="form-label">Name</label>
          <input type="text" class="form-control @error('nama_relawan')is-invalid @enderror" id="nama_relawan" name="nama_relawan" required value="{{ old('nama_relawan') }}">
        @error('nama_relawan')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label for="tgllahir_relawan" class="form-label">Date of Birth</label>
            <input type="date" class="form-control @error('tgllahir_relawan')is-invalid @enderror" id="tgllahir_relawan" name="tgllahir_relawan" required value="{{ old('tgllahir_relawan') }}">
            @error('tgllahir_relawan')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
          </div>

          <div class="mb-3">
            <label for="usia_relawan" class="form-label">Age</label>
            <input type="text" class="form-control @error('usia_relawan')is-invalid @enderror" id="usia_relawan" name="usia_relawan" required value="{{ old('usia_relawan') }}">
            @error('usia_relawan')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
          </div>

          <div class="mb-3                        ">
              <label for="jk_relawan" class="form-label">Gender</label>
            <div class="form-check form-check-inline mb-0 me-4 @error('jk_relawan')is-invalid @enderror">
              @error('jk_relawan')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
          @enderror
                <input class="form-check-input" name="jk_relawan" type="radio"
                    name="inlineRadioOptions" id="femaleGender" value="1" />
                <label class="form-check-label" for="femaleGender">Female</label>
            </div>
    
            <div class="form-check form-check-inline mb-0 me-4">
                <input class="form-check-input" name="jk_relawan" type="radio"
                    name="inlineRadioOptions" id="maleGender" value="0" />
                <label class="form-check-label" for="maleGender">Male</label>
            {{-- <input type="text" class="form-control" id="jk" name="jk"> --}}
          </div>

          <div class="mb-3">
            <label for="alamat_relawan" class="form-label">Address</label>
            <input type="text" class="form-control @error('alamat_relawan')is-invalid @enderror" id="alamat_relawan" name="alamat_relawan" required value="{{ old('alamat_relawan') }}">
            @error('alamat_relawan')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
          </div>

          <div class="mb-3">
            <label for="pekerjaan_relawan" class="form-label">Job</label>
            <input type="text" class="form-control @error('pekerjaan_relawan')is-invalid @enderror" id="pekerjaan_relawan" name="pekerjaan_relawan" required value="{{ old('pekerjaan_relawan') }}">
            @error('pekerjaan_relawan')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
          </div>

          <div class="mb-3">
            <label for="notelp_relawan" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="notelp_relawan" name="notelp_relawan" required value="{{ old('notelp_relawan') }}">
          </div>

          <div class="mb-3">
            <label for="email_relawan" class="form-label">Email</label>
            <input type="email" class="form-control @error('email_relawan')is-invalid @enderror" id="email_relawan" name="email_relawan" required value="{{ old('email_relawan') }}">
            @error('email_relawan')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
          </div> 
          <div class="mb-3">
            <label for="username_relawan" class="form-label">Username</label>
            <input type="text" class="form-control @error('username_relawan')is-invalid @enderror" id="username_relawan" name="username_relawan" required value="{{ old('pekerjaan_relawan') }}">
            @error('username_relawan')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
          </div>
    </div>

    <div>
        <button type="submit" class="btn btn-primary mb-3">Add Data</button>
      </form>
    </div>
</div>
@endsection
