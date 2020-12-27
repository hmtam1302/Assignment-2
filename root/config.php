<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'assignment2');

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
if ($action == 'logout') {
    session_start();
    unset($_SESSION["username"]);
    //header("Location: home.php");
    echo "home.php";
    session_destroy();
}
?>
