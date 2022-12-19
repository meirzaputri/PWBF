<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    {{-- <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Volunteer-an</title>
</head>

<body class="bg-dark">
    @include('partials.navbar')

    <section class="h-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-8">
                    <div class="card card-registration my-4">
                        <form action="/orgregister" method="post">
                            @csrf
                            <div class="col-xl-12">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Organization Registration form</h3>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example17">Email address</label>
                                        <input type="email" id="form2Example17" name="email" class="form-control form-control-lg  @error('email') is-invalid @enderror" />
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
              
                                      <div class="form-outline mb-4">
                                          <label class="form-label" for="form2Example17"> Username</label>
                                        <input type="text" id="form2Example18" name="username" class="form-control form-control-lg @error('username') is-invalid @enderror" />
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                    
                                      <div class="form-outline mb-4">
                                          <label class="form-label" for="form2Example27">Password</label>
                                        <input type="password" name="password" id="form2Example27" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
              
                                      <div class="form-outline mb-4">
                                          <label class="form-label" for="form2Example27">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="form2Example28" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" />
                                        @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example8">Name</label>
                                        <input type="text" id="form3Example8" name="name"
                                            class="form-control form-control-lg @error('name')is-invalid @enderror"
                                            required />
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example8">Division</label>
                                        <select class="form-select" name="divisi_id">
                                            <option selected>Open this select menu</option>
                                            <option value="1">Bencana</option>
                                            <option value="2">Fauna</option>
                                            <option value="3">Kesehatan</option>
                                            <option value="4">Lingkungan</option>
                                            <option value="5">Pendidikan</option>
                                            <option value="6">Pengembangan Masyarakat</option>
                                            <option value="7">Seni dan Budaya</option>
                                            <option value="8">Sosial</option>
                                        </select>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example8">Address</label>
                                        <input type="text" id="form3Example8" name="alamat"
                                            class="form-control form-control-lg @error('alamat')is-invalid @enderror"
                                            required />
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example8">Phone Number</label>
                                        <input type="text" id="form3Example8" name="notelp"
                                            class="form-control form-control-lg @error('notelp')is-invalid @enderror"
                                            required />
                                        @error('notelp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
<input type="hidden" name="level" value="organisasi">

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="submit" class="btn btn-outline-dark">Submit form</button>
                                    </div>

                                    {{-- <input type="hidden" name="email_organisasi" value="{{ $validData['email_organisasi'] }}"> --}}
                                    {{-- <input type="hidden" name="username" value="{{ $validData['username'] }}">
                                    <input type="hidden" name="password" value="{{ $validData['password'] }}"> --}}
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>

</html>
