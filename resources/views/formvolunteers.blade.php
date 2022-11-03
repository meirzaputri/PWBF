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
                        <form action="/formvolunteers2" method="post">
                            @csrf
                            <div class="col-xl-12">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Registration form</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="first" id="form3Example1m" name="first"
                                                    class="form-control form-control-lg @error('first')is-invalid @enderror" required/>
                                                <label class="form-label" for="form3Example1m">First name</label>
                                                @error('name')
                                                <div class="invalid-feedback">
                                                 {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1n" name="last"
                                                    class="form-control form-control-lg"/>
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example8" name="alamat"
                                            class="form-control form-control-lg @error('alamat')is-invalid @enderror" required/>
                                        <label class="form-label" for="form3Example8">Address</label>
                                         @error('alamat')
                                                <div class="invalid-feedback">
                                                 {{ $message }}
                                            </div>
                                            @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example8" name="notelp"
                                            class="form-control form-control-lg @error('notelp')is-invalid @enderror" required/>
                                        <label class="form-label" for="form3Example8">Phone Number</label>
                                        @error('notelp')
                                        <div class="invalid-feedback">
                                         {{ $message }}
                                    </div>
                                    @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="date" id="form3Example8" name="tgllhr_relawan"
                                            class="form-control form-control-lg" @error('tgllhr_relawan')is-invalid @enderror required/>
                                        <label class="form-label" for="form3Example8">Date of Birth</label>
                                        @error('tgllhr_relawan')
                                        <div class="invalid-feedback">
                                         {{ $message }}
                                    </div>
                                    @enderror
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender: </h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" name="jk_relawan" type="radio"
                                                name="inlineRadioOptions" id="femaleGender" value="1" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" name="jk_relawan" type="radio"
                                                name="inlineRadioOptions" id="maleGender" value="0" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example9" name="pekerjaan_relawan"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example9">Job</label>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="submit" class="btn btn-outline-dark">Submit form</button>
                                    </div>

                                    <input type="hidden" name="email" value="{{ $validData['email'] }}">
                                    <input type="hidden" name="username" value="{{ $validData['username'] }}">
                                    <input type="hidden" name="password" value="{{ $validData['password'] }}">
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
