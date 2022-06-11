<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- BOXICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('img/ic_logo.png')}}" type="image/x-icon" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />


    <title>S'watch</title>
  </head>
  <body>
    <div class="split-screen">
      <div class="left">
        <form action="">
          <section class="copy">
            <h2>Log in</h2>
            <p>Enter your credentials to access your account.</p>
          </section>

          <p>
            <a class="btn btn-border btn-google-signup" href="#"> <img src="{{asset('img/ic_google.svg')}}" class="icon" alt="" /> Log in with Google </a>
          </p>

          <div class="line">
            <p class="or">or</p>
          </div>

          <div class="input-container email">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" />
          </div>
          <div class="input-container password">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" />
          </div>

          <div class="input-container cta">
            <a href="#"> <label class="forgot-password-container"> Forgot passowrd ? </label></a>
          </div>
          <a href="index.html" style="color: white; display: block; text-align: center" class="signup-btn btn-primary">Log in</a>
          <div class="signup-container">
            <p>New user?</p>
            <a href="{{ route('signup') }}"><strong>Sign up</strong></a>
          </div>
        </form>
      </div>
      <div class="right-login">
        <section class="copy">
          <a href="{{ route('welcome') }}"><img src="{{asset('img/ic_logo.png')}}" alt="" style="width: 100px" /></a>
        </section>
      </div>
    </div>
  </body>
</html>
