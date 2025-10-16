<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creative Login Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
      overflow: hidden;
      position: relative;
    }

   
    .circle {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.15);
      animation: float 8s infinite ease-in-out;
      z-index: 0;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-30px); }
    }

    .circle:nth-child(1) { width: 120px; height: 120px; top: 10%; left: 15%; animation-delay: 0s; }
    .circle:nth-child(2) { width: 200px; height: 200px; bottom: 15%; right: 10%; animation-delay: 2s; }
    .circle:nth-child(3) { width: 150px; height: 150px; top: 60%; left: 5%; animation-delay: 4s; }

 
    .container {
      position: relative;
      z-index: 1;
      width: 360px;
      padding: 40px;
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(15px);
      box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #fff;
      text-align: center;
      transition: all 0.3s ease;
    }

    h2 {
      margin-bottom: 25px;
      font-size: 28px;
      font-weight: 600;
    }

   
    .input-box {
      margin-bottom: 20px;
      text-align: left;
      position: relative;
    }

    .input-box label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      color: #fff;
    }

    .input-box input {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid rgba(255, 255, 255, 0.5);
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      font-size: 15px;
      outline: none;
      transition: 0.3s;
    }

    .input-box input::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .input-box input:focus {
      border-color: #a1c4fd;
      background: rgba(255, 255, 255, 0.2);
    }

    .btn {
      width: 100%;
      padding: 12px;
      margin-top: 10px;
      border: none;
      border-radius: 25px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: #fff;
      transition: all 0.3s ease;
    }

    .btn:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #764ba2, #667eea);
    }

    .switch {
      margin-top: 20px;
      font-size: 14px;
      color: #fff;
    }

    .switch a {
      color: #699ced;
      font-weight: 500;
      text-decoration: none;
      cursor: pointer;
      transition: 0.3s;
    }

    .switch a:hover {
      text-decoration: underline;
    }

    /* 🔄 Animations */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    #loginForm, #registerForm {
      animation: fadeIn 1s ease;
    }
  </style>
</head>
<body>

 
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>

  <div class="container">

    <form id="loginForm" action="login.php" method="POST">
      <h2>Login</h2>
      <div class="input-box">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email">
      </div>
      <div class="input-box">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
      </div>
      <button class="btn">Login</button>
      <div class="switch">
        Don’t have an account? <a onclick="showRegister()">Register</a>
      </div>
    </form>

    <form id="registerForm" style="display: none;" action="register.php" method="POST">
      <h2>Register</h2>
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter your name">
      </div>
      <div class="input-box">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email">
      </div>
      <div class="input-box">
        <label>Password</label>
        <input type="password" name="password" placeholder="Create a password">
      </div>
      <div class="input-box">
        <label>Confirm Password</label>
        <input type="password" name="cnf_password" placeholder="Re-enter password">
      </div>
      <button class="btn">Register</button>
      <div class="switch">
        Already have an account? <a onclick="showLogin()">Login</a>
      </div>
    </form>
  </div>

  <script>
    function showRegister() {
      document.getElementById("loginForm").style.display = "none";
      document.getElementById("registerForm").style.display = "block";
    }

    function showLogin() {
      document.getElementById("registerForm").style.display = "none";
      document.getElementById("loginForm").style.display = "block";
    }
  </script>
</body>
</html>
