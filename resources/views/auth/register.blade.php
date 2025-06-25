<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register Perpustakaan</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    @include('pwa.head')

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                        <div class="login-brand">
                            <img src="{{ asset('assets/img/Anak Perempuan Membaca Buku.png') }}" alt="logo"
                                width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="/register">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Nama Kamu" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Email Kamu" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input name="password" id="password" type="password" class="form-control"
                                            placeholder="Kata Sandi Kamu" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input name="password_confirmation" id="password_confirmation" type="password"
                                            class="form-control" placeholder="Konfirmasi Kata Sandi" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            REGISTER
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="mt-5 text-muted text-center">
                            Sudah punya akun? <a href="/login">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>

    @include('pwa.script')

</body>

</html>
