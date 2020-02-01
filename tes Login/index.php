<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Skensa Lettering | Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
  	<!-- MAIN CSS -->
  	<link rel="stylesheet" href="assets/css/main.css">
  	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  	<link rel="stylesheet" href="assets/css/demo.css">
  	<!-- GOOGLE FONTS -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  	<!-- ICONS -->
  	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body>
    <div id="app">
        <main class="py-4">
          <div class="vertical-align-wrap">
              <div class="vertical-align-middle">
                  <div class="auth-box ">
                      <div class="left">
                          <div class="content">
                              <div class="header">
                                  <div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
                                  <p class="lead">Login to your account</p>
                              </div>
                              <form class="form-auth-small" method="POST" action="{{ route('login') }}">
                                  <div class="form-group">
                                      <label for="email" class="control-label sr-only"></label>
                                      <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                      <span class="invalid-feedback" role="alert">
                                          <strong></strong>
                                      </span>
                                  </div>
                                  <div class="form-group">
                                      <label for="password" class="control-label sr-only"></label>
                                      <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="current-password" placeholder="Password">
                                      <span class="invalid-feedback" role="alert">
                                          <strong></strong>
                                      </span>
                                  </div>
                                  <div class="form-group clearfix">
                                      <label class="fancy-checkbox element-left" for="remember">
                                          <input type="checkbox" name="remember" id="remember">
                                          <span>Remember me</span>
                                      </label>
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                  <div class="bottom">
                                      <span class="helper-text"><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">Forgot Your Password?</a></span>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <div class="right">
                          <div class="overlay"></div>
                          <div class="content text">
                              <h1 class="heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                          </div>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>
        </main>
    </div>
</body>
</html>
