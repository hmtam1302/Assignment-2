<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--Style file-->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/main.js"></script>

    <!--Animation.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <title>Login</title>
</head>

<body data-new-gr-c-s-check-loaded="8.867.0" style="background-image: url('assets/img/login-bg.jpg'); background-size: cover;">
    <!--Header / Navbar-->
    <nav id="mainNav" class="navbar navbar-expand-md fixed-top animate__animated animate__slideInDown">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <button class="login-btn btn btn-outline-primary" #id="login" href="login.html">Login</button>
            <a href="index.php" class="navbar-brand font-weight-bold" id="projectName">Bookstore</a>
            <button type="button" class="btn" data-toggle="collapse" data-target="#navbarDefault"><i
                    class="material-icons" id="nav-icon">menu</i></button>
            <div class="line-break"></div>
            <div id="navbarDefault" class="navbar-collapse collapse justify-content-center align-items-center">
                <ul class="nav navbar-nav text-uppercase font-weight-bold">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link nav-link-hover">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link nav-link-hover">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="categories.php" class="nav-link nav-link-hover">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="products.php" class="nav-link nav-link-hover">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link nav-link-hover">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="intro">
        <!---------Login form-->
        <div class="intro-overlay"></div>
        <div class="main d-flex justify-content-center align-items-center flex-column flex-wrap">
            <div class="login-container" id="container">
                <div class="form-container sign-up-container">
                    <form action="#">
                        <h1>Create Account</h1>
                        <img src="assets/img/hcmut.png">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control animate__animated" id="username"
                                placeholder="Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate" id="validateName"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control animate__animated" name="email" id="email"
                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate" id="validateEmail"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control animate__animated" id="password"
                                placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate" id="validateName"></div>
                        </div>
                        <button class="btn btn-outline-primary btn-rounded px-5">Sign Up</button>
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <form action="#">
                        <h1 class="font-weight-bold">Login</h1>
                        <img src="assets/img/hcmut.png">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control animate__animated" id="username"
                                placeholder="Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate" id="validateName"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control animate__animated" id="password"
                                placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate" id="validateName"></div>
                        </div>
                        <a href="#" class="my-2">Forgot your password?</a>
                        <button class="btn btn-outline-primary btn-rounded px-5">Sign In</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="btn btn-primary btn-rounded px-5 ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1 class="text-white">Hello, Friend!</h1>
                            <p>Enter your personal details and start journey with us</p>
                            <button class="btn btn-primary btn-rounded px-5 ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Preloader-->
    <div id="preloader"></div>
</body>

</html>