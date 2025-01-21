<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <!-- Add the logo here -->
                        <img src="<?= url('images/' . $yogi->login_icon) ?>" alt="logo" style="max-width: 50%; height: auto;" />
                    </div>
                    <h1 class="auth-title text-warning">Log in.</h1>

                    <p class="auth-subtitle mb-5">"I believe quality is power"</p>

                    <!-- Menampilkan Pesan Kesalahan -->
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{ url('home/aksi_login') }}" method="POST">
                        @csrf <!-- Token CSRF untuk keamanan -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username" value="{{ old('username') }}" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <!-- Menambahkan reCAPTCHA -->
                        <div class="form-group mb-4">
                            <div class="g-recaptcha" data-sitekey="6Le7mL4qAAAAAImIQJASZF6bW8LtW_0eSn1uMSNe"></div>
                        </div>

                        <button class="btn btn-warning btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>

                    
                </div>
            </div>

            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>

    <!-- Menambahkan Skrip untuk reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
