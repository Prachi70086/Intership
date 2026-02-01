<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OKCL Internship Programme - Sign In</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Inter", sans-serif;
      background: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      position: relative;
      overflow: hidden;
    }

    /* Decorative orange background */
   .corner {
  position: absolute;
  width: 1000px;
  height: 1000px;
  background: radial-gradient(circle at center, rgba(255,140,0,0.5), rgba(255,165,0,0.25), transparent 70%);
  border-radius: 50%;
  z-index: 0;
  filter: blur(45px);
}
.top-left {
  top: -400px;
  left: -400px;
}
.bottom-right {
  bottom: -400px;
  right: -400px;
}


    /* Heading */
    .heading {
      font-size: 26px;
      font-weight: 700;
      color: #444;
      margin-bottom: 20px;
      text-align: center;
      z-index: 2;
    }

    /* Card Box */
    .card {
  background: #fffaf0;   /* Light cream color */
  padding: 40px 50px;
  border-radius: 14px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  text-align: center;
  z-index: 1;
  width: 340px;
  animation: fadeIn 0.8s ease-in-out;
}
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .logo {
      font-weight: 700;
      margin-bottom: 10px;
      color: #ff8c00;
      font-size: 22px;
    }
    .logo img {
  width: 80px;      /* adjust size */
  height: auto;
  margin-bottom: 10px;
}

  .welcome {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 22px;
}

.okcl {
  color: #ff5722;  /* Red-Orange */
}

.internship {
  color: #ff9800;  /* Bright Orange */
}

.programme {
  color: #ffb300;  /* Golden Yellow */
}

    .subtitle {
      color: #666;
      font-size: 14px;
      margin-bottom: 20px;
    }

    /* Form Inputs */
    .input-box {
      width: 100%;
      padding: 12px 14px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 14px;
      outline: none;
      transition: all 0.2s;
    }
    .input-box:focus {
      border-color: orange;
      box-shadow: 0 0 5px rgba(255,165,0,0.4);
    }

    /* Button */
    .btn-submit {
      width: 100%;
      padding: 12px 14px;
      border: none;
      border-radius: 6px;
      background: linear-gradient(90deg, #ff8c42, #ff6a00);
      color: white;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      margin-top: 15px;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(255,140,0,0.4);
    }

    /* Extra Links */
    .links {
      margin-top: 15px;
      font-size: 13px;
    }
    .links a {
      color: orange;
      text-decoration: none;
      margin: 0 5px;
      transition: color 0.2s;
    }
    .links a:hover {
      color: darkorange;
    }
  </style>
</head>
<body>

  <!-- Orange background shapes -->
  <div class="corner top-left"></div>
  <div class="corner bottom-right"></div>

  <!-- Heading -->
  <div class="heading"></div>

  <!-- Card -->
  <div class="card">
  <div class="logo">
  <img src="images\okcl logo_HD.png" alt="OKCL Logo">
</div>
 <div class="welcome flex items-center space-x-2">

  <span class="internship text-orange-600 font-semibold text-xl">Internship</span>
  <span class="programme text-gray-700 font-medium text-xl">Programme</span>
</div>
    <div class="subtitle">Sign in with your credentials</div>
    
 <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <input id="email" type="email" name="email" :value="old('email')" class="input-box" placeholder="Email" required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <!-- Password -->
            <input id="password" type="password" name="password" class="input-box" placeholder="Password" required autocomplete="current-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Remember Me -->
            <label for="remember_me" style="font-size: 13px; color: #555;">
                <input id="remember_me" type="checkbox" name="remember">
                {{ __('Remember me') }}
            </label>

            <button type="submit" class="btn-submit">Login</button>
        </form>

    <div class="links">
      <a href="#">Forgot Password?</a> | 
      <a href="#">SignUp</a>
    </div>
  </div>
     @if ($errors->any())
        <div style="color:red;">
            {{ $errors->first() }}
        </div>
    @endif

</body>
</html>
