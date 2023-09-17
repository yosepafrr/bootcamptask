<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <div class="wrapper">
        <div class="logo">
            <img src="https://i.pinimg.com/564x/d1/fd/ef/d1fdef29d44d97d8f16422a5c4dbe4a3.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            Login
        </div>
        <form action= "/login" method="POST" class="p-3 mt-3">
            @csrf 

        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="loginname" id="username" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="loginpassword" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
        <a class = "text-danger"> Wrong Password!</a>
        </div>
        <div class="text-center fs-6">
        </a> Don't have an account? <a href="/">Register</a>
        </div>
        <div class="text-center fs-6">
        <a href="/landingp">Visit without login</a>
        </div>
    </div>
    </body>
</html>