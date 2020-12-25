<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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

    <title>Price Page</title>
</head>

<body data-new-gr-c-s-check-loaded="8.867.0" id="pagebody">
    <!--Header / Navbar-->
    <nav id="mainNav" class="navbar navbar-expand-md fixed-top animate__animated animate__slideInDown">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <button class="login-btn btn btn-outline-primary" #id="login" href="login.html">Login</button>
            <a href="index.html" class="navbar-brand font-weight-bold" id="projectName">Bookstore</a>
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
                        <a href="products.php" class="nav-link nav-link-hover active-item">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link nav-link-hover">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ======= Products Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row  animate__animated animate__fadeInDown">
                <div class="col-sm-12">
                    <div class="price-box">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Price Details
                            </h3>
                            <p class="subtitle-a">
                                Products
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ======= Get Url Image from Database ======= -->
            <div class="row">
            <?php
            define('DB_HOST', 'localhost'); 
            define('DB_NAME', 'assignment2'); 
            define('DB_USER','root'); 
            define('DB_PASSWORD',''); 
            
            $con=mysqli_connect(DB_HOST,DB_USER,'',DB_NAME) ; 
            
            $database="select * from product";
            $record=mysqli_query($con,$database);
            while ($row =mysqli_fetch_assoc($record))
            {  $path= $row['url'];
                $name=$row['name'];
                $author=$row['author'];
                $type=$row['type'];
            ?>
           
          
          
                <div class="col-md-4 ">
                    <div class="work-box animate__animated animate__fadeInLeftBig">
                        <a href="" data-gall="portfolioGallery" class="venobox">
                            <div class="work-img">
                            <?php echo '<img src="'.$path.'" alt="" class="img-fluid">' ?>
                         
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title"><?php echo $name ?></h2>
                                    <p>Author: <?php echo $author ?></p>
                                    <p>Description: <?php echo $type ?></p>
                                    <div class="w-more">
                                        <span class="w-ctegory">Price</span> - <span class="w-date">15$</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            <?php
            }
            ?>
               
                              
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
    <!--Back to to-->
    <a href="#page-body" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!--Preloader-->
    <div id="preloader"></div>
</body>