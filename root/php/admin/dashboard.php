<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>

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
                <a href="dashboard.php" class="sidebar-nav-link active">
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
                <a href="product.php" class="sidebar-nav-link">
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
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter bg-primary">
                    <p>
                        <i class="fas fa-user-alt"></i>
                    </p>
                    <h3>100</h3>
                    <p>Users</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter bg-warning">
                    <p>
                        <i class="fas fa-user-friends"></i>
                    </p>
                    <h3>4</h3>
                    <p>Staff</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter bg-success">
                    <p>
                        <i class="fas fa-dice-d6"></i>
                    </p>
                    <h3>51</h3>
                    <p>Products</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter bg-danger">
                    <p>
                        <i class="fas fa-comment"></i>
                    </p>
                    <h3>50</h3>
                    <p>Contact</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 id="titleTable">
                            Profile
                        </h3>
                    </div>
                    <div class="card-content">
                        <table>
                            <tr>
                                <th>Username</th>
                                <td>huynhhai</td>
                            </tr>
                            <tr>
                                <th>Full Name</th>
                                <td>Huỳnh Công Hải</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>conghai20@gmail.com</td>
                            </tr>
                            <tr>
                                <th>Url</th>
                                <td>fb.com/haryo.hh</td>
                            </tr>
                            <tr>
                                <th>Birthday</th>
                                <td>2000-01-21</td>
                            </tr>
                        </table>
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-outline-primary mx-3" data-toggle="modal" data-target="#profileModal">Edit profile</button>
                            <button class="btn btn-outline-primary mr-2" data-toggle="modal" data-target="#passwordModal">Change password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 id="titleTable">
                            Information
                        </h3>
                    </div>
                    <div class="card-content">
                        <table>
                            <tr>
                                <th>Address</th>
                                <td>huynhhai</td>
                            </tr>
                            <tr>
                                <th>Telephone</th>
                                <td>Huỳnh Công Hải</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>conghai20@gmail.com</td>
                            </tr>
                            <tr>
                                <th>Detail</th>
                                <td>fb.com/haryo.hh</td>
                            </tr>
                        </table>
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-outline-primary mx-3" data-toggle="modal" data-target="#informationModal">Edit information</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal change profile-->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Change profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row align-items-center">
                            <label for="full-name" class="col-2 col-form-label"><strong>Full name</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="full-name">
                            </div>
                            <span class="text-danger" id="nameErr"></span>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="email-profile" class="col-2 col-form-label"><strong>Email</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="email" value="" id="email-profile">
                            </div>
                            <span class="text-danger" id="emailErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="url-profile" class="col-2 col-form-label"><strong>URL</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="url" value="" id="url-profile">
                            </div>
                            <span class="text-danger" id="urlErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="birthday" class="col-2 col-form-label"><strong>Birthday</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="date" value="" id="birthday">
                            </div>
                            <span class="text-danger" id="birthdayErr"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="changeProfile()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal change password-->
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Change password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row align-items-center">
                            <label for="password-change" class="col-2 col-form-label"><strong>Current password</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="password" value="" id="password-change">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="new-password-change" class="col-2 col-form-label"><strong>New password</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="password" value="" id="new-password-change">
                            </div>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="confirm-password-change" class="col-2 col-form-label"><strong>Confirm password</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="password" value="" id="confirm-password-change" onkeyup="validateConfirm()">
                            </div>
                            <span class="text-danger" id="confirmErr"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="changePassword()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
        <!-- Modal change profile-->
        <div class="modal fade" id="informationModal" tabindex="-1" role="dialog" aria-labelledby="informationModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Change information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row align-items-center">
                            <label for="address" class="col-2 col-form-label"><strong>Address</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="address">
                            </div>
                            <span class="text-danger" id="addressErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="telephone" class="col-2 col-form-label"><strong>Telephone</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="telephone">
                            </div>
                            <span class="text-danger" id="telephoneErr"></span>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="email-info" class="col-2 col-form-label"><strong>Email</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="email" value="" id="email-info">
                            </div>
                            <span class="text-danger" id="emailErr"></span>
                        </div>
                        <div class="form-group row align-items-center justify-content-center">
                            <label for="detail" class="col-2 col-form-label"><strong>Detail</strong></label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="detail">
                            </div>
                            <span class="text-danger" id="birthdayErr"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="changeInfo()">Save changes</button>
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