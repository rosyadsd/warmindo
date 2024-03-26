<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>Web Design Mastery | WDM Login Page</title>
  </head>
  <body>
    <div class="container">
      <div class="container__content">
        <h2>Warmindo Aroma</h2>
        <h3>Welcome back!</h3>
        <h1>Log In Admin</h1>
        <h5>Halo, tim Aroma! Kami senang melihat Anda kembali.Mohon masukkan informasi login Anda untuk memulai.</h5>
        <form action="/">
          <label for="email">Email</label>
          <div class="input__row">
            <input type="email" placeholder="Enter Your Email" />
          </div>
          <div class="input__header">
            <label for="password">Password</label>
            <a href="#">Forgot Password?</a>
          </div>
          <div class="input__row">
            <input type="password" id="password" placeholder="Password" />
            <span id="password-eye"><i class="ri-eye-off-line"></i></span>
          </div>
          <button>LOGIN</button>
        </form>
      </div>
      <div class="container__image">
        <img src="https://i.ibb.co/zhrvvPv/masak-mie-1.png" alt="header" />
      </div>
    </div>

    <script src="main.js"></script>
  </body>
</html>