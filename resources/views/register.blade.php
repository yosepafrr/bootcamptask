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
            Register
        </div>
        <form action= "/register" method="POST" class="p-3 mt-3">
            @csrf 
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="name" id="username" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button type="submit" class= "btn mt-3">Register</button>
        </form>
        <div class="text-center fs-6">
        </a> already have account? <a href="/login">Login</a>
        <div class="text-center fs-6">
            <a href="/landingp">Visit without login</a>
        </div>
        </div>
    </div>
    </body>
</html>