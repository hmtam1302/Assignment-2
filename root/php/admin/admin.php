<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Import lib -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- End import lib -->


    <link rel="stylesheet" href="/assets/css/admin.css">
</head>

<body class="overlay-scrollbar">
    <!-- navbar -->
    <div class="navbar">
        <!-- nav left -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fas fa-bars" onclick="collapseSidebar()"></i>
                </a>
            </li>
            <li class="nav-item" id="mangeLogo">
                Quản lý
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
        <ul class="navbar-nav nav-right">
            <li class="nav-item mode">
                <a class="nav-link" href="#" onclick="switchTheme()">
                    <i class="fas fa-moon dark-icon"></i>
                    <i class="fas fa-sun light-icon"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link">
                    <i class=" 	fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i>
                    <span class="navbar-badge">15</span>
                </a>
                <ul id="notification-menu" class="dropdown-menu notification-menu">
                    <div class="dropdown-menu-header">
                        <span>
                            Notifications
                        </span>
                    </div>
                    <div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-gift"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-gift"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-gift"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-gift"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-gift"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-gift"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    <br>
                                    <span>
                                        15/07/2020
                                    </span>
                                </span>
                            </a>
                        </li>
                    </div>
                    <div class="dropdown-menu-footer">
                        <span>
                            View all notifications
                        </span>
                    </div>
                </ul>
            </li>
            <li class="nav-item avt-wrapper">
                <div class="avt dropdown">
                    <img src="/assets/img/user.png" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
                    <ul id="user-menu" class="dropdown-menu">
                        <li class="dropdown-menu-item">
                            <a class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-cog"></i>
                                </div>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="far fa-credit-card"></i>
                                </div>
                                <span>Payments</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-spinner"></i>
                                </div>
                                <span>Projects</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- end nav right -->
    </div>
    <!-- end navbar -->
    <!-- sidebar -->
    <div class="sidebar">
        <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span>
                        Trang chính
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="home.html" class="sidebar-nav-link active">
                    <div>
                        <i class="fab fa-accusoft"></i>
                    </div>
                    <span>Đơn hàng</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="home_staff.html" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-tasks"></i>
                    </div>
                    <span>Nhân Viên</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->
    <!-- main content -->
    <div class="wrapper">
        <div class="card">
            <div class="card-header">
                <h3 id="titleTable">
                    Đơn hàng
                </h3>
                <i class="fas fa-ellipsis-h"></i>
            </div>
            <div class="card-content" id="orderData">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project</th>
                            <th>Manager</th>
                            <th>Status</th>
                            <th>Due date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>React</td>
                            <td>Tran Anh Tuat</td>
                            <td>
                                <span class="dot">
                                    <i class="bg-success"></i>
                                    Completed
                                </span>
                            </td>
                            <td>17/07/2020</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Vue</td>
                            <td>Bui Nhu Sang</td>
                            <td>
                                <span class="dot">
                                    <i class="bg-warning"></i>
                                    In progress
                                </span>
                            </td>
                            <td>18/07/2020</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Laravel</td>
                            <td>Phan Nhat Truong</td>
                            <td>
                                <span class="dot">
                                    <i class="bg-warning"></i>
                                    In progress
                                </span>
                            </td>
                            <td>17/07/2020</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Django</td>
                            <td>Le Anh Tuan</td>
                            <td>
                                <span class="dot">
                                    <i class="bg-danger"></i>
                                    Delayed
                                </span>
                            </td>
                            <td>07/07/2020</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>MEAN</td>
                            <td>John Evan</td>
                            <td>
                                <span class="dot">
                                    <i class="bg-primary"></i>
                                    Pending
                                </span>
                            </td>
                            <td>20/08/2020</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>MERN</td>
                            <td>Robert</td>
                            <td>
                                <span class="dot">
                                    <i class="bg-primary"></i>
                                    Pending
                                </span>
                            </td>
                            <td>20/08/2020</td>
                        </tr>
                    </tbody>
                </table>
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