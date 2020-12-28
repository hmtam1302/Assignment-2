<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="/assets/css/admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Import lib -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- End import lib -->



</head>

<body class="overlay-scrollbar">
    <!-- navbar -->
    <div class="navbar" style="position:fixed;">
        <!-- nav left -->
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item mx-2" style="line-height:0;">
                <a class="nav-link">
                    <i class="fas fa-bars" onclick="collapseSidebar()"></i>
                </a>
            </li>
            <li class="nav-item" id="mangeLogo">
                Management
            </li>
        </ul>
        <!-- end nav left -->
        <!-- form -->
        <form class="navbar-search">
            <input type="text" name="Search" class="navbar-search-input" placeholder="What you looking for...">
            <i class="fas fa-search"></i>
        </form>
        <!-- end form -->
        <!-- nav right -->
        <ul class="navbar-nav nav-right d-flex flex-row align-items-center justify-content-between">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="user-img" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/assets/img/user.png" width="40" height="40" class="rounded-circle">
                </a>
                <div class="dropdown-menu" aria-labelledby="user-img" style="position: absolute;left: auto;">
                    <a class="dropdown-item" href="#"><i class="fas fa-cog" style="padding-right: 20px;"></i>Settings</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt" style="padding-right: 20px;"></i>Log out</a>
                </div>
            </li>
        </ul>
        </ul>
        <!-- end nav right -->
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div class="sidebar">
        <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
                <a href="dashboard.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="user.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-user-alt"></i>
                    </div>
                    <span>User</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="staff.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <span>Staff</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="product.php" class="sidebar-nav-link active">
                    <div>
                        <i class="fas fa-dice-d6"></i>
                    </div>
                    <span>Product</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="contact.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-comment"></i>
                    </div>
                    <span>Contact</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


    <!-- main content -->
    <div class="wrapper">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter bg-success">
                    <p>
                        <i class="fas fa-dice-d6"></i>
                    </p>
                    <h3>51</h3>
                    <p>Products</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 id="titleTable">
                            Product table
                        </h3>
                    </div>
                    <div class="card-content">
                        <table class="table-stripped">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Type</th>
                                <th>URL</th>
                                <th>Price</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>A Madness of Sunshine</td>
                                <td>Nalini singh</td>
                                <td>International</td>
                                <td>/assets/img/internationalbook/work-1.jpg</td>
                                <td>15</td>
                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#productEditModal">Edit</button></td>
                                <td><button class="btn btn-danger" onclick="deleteProduct(id)">Delete</button></td>
                            </tr>
                        </table>
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-outline-primary mx-3" data-toggle="modal" data-target="#productModal">Add new product</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal add user-->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Add new product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row align-items-center">
                            <label for="id" class="col-2 col-form-label"><strong>ID</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="id">
                            </div>
                            <span class="text-danger" id="idErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="name" class="col-2 col-form-label"><strong>Name</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="name">
                            </div>
                            <span class="text-danger" id="nameErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="author" class="col-2 col-form-label"><strong>Author</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="author">
                            </div>
                            <span class="text-danger" id="authorErr"></span>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="type" class="col-2 col-form-label"><strong>Type</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="type">
                            </div>
                            <span class="text-danger" id="typeErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="url" class="col-2 col-form-label"><strong>URL</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="url">
                            </div>
                            <span class="text-danger" id="urlErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="price" class="col-2 col-form-label"><strong>Price</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="number" min="0" step="0.01" value="" id="price">
                            </div>
                            <span class="text-danger" id="priceErr"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addProduct()">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal add user-->
    <div class="modal fade" id="productEditModal" tabindex="-1" role="dialog" aria-labelledby="productEditModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Edit product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row align-items-center">
                            <label for="id-edit" class="col-2 col-form-label"><strong>ID</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="id-edit">
                            </div>
                            <span class="text-danger" id="idErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="name-edit" class="col-2 col-form-label"><strong>Name</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="name-edit">
                            </div>
                            <span class="text-danger" id="nameErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="author-edit" class="col-2 col-form-label"><strong>Author</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="author-edit">
                            </div>
                            <span class="text-danger" id="authorErr"></span>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="type-edit" class="col-2 col-form-label"><strong>Type</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="type-edit">
                            </div>
                            <span class="text-danger" id="typeErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="url-edit" class="col-2 col-form-label"><strong>URL</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="url-edit">
                            </div>
                            <span class="text-danger" id="urlErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="price-edit" class="col-2 col-form-label"><strong>Price</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="number" min="0" step="0.01" value="" id="price-edit">
                            </div>
                            <span class="text-danger" id="priceErr"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="editProduct(oldId)">Add</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end main content -->
    <!-- import script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="js/home.js"></script>
    <!-- end import script -->
</body>

<!-- import script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="/assets/js/admin.js"></script>
<!-- end import script -->


</html>