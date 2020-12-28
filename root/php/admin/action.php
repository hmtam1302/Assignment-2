<?php
$action = isset($_POST['action']) ? $_POST['action'] : "";;

require_once "config.php";

if ($action == "login") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT password FROM admin WHERE username=?';

    echo login($mysqli, $sql, $username, $password);
}
if ($action == "edit_profile") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $url = $_POST['url'];
    $birthday = $_POST['birthday'];

    echo changeProfile($mysqli, $fullname, $email, $phone, $url, $birthday);
}
if ($action == "change_password") {
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];

    echo changePassword($mysqli, $oldPassword, $newPassword);
}
if ($action == "logout") {
    logout();
}
if ($action == "change_info") {
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $detail = $_POST['detail'];

    echo changeInfo($mysqli, $address, $phone, $email, $detail);
}

function login($mysqli, $sql, $username, $password)
{
    $param_username = NULL;
    $admin_password = NULL;
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param('s', $param_username);

        $param_username = $username;

        if ($stmt->execute()) {
            $stmt->store_result();
            $stmt->bind_result($admin_password);
            if ($stmt->fetch()) {
                if ($stmt->num_rows == 0) {
                    return "Wrong username!";
                }
                if ($password != $admin_password) {
                    return "Wrong password!";
                } else {
                    session_start();
                    $_SESSION['admin'] = $username;
                    return "Login successfully!";
                }
            } else {
                return "SQL fetch incorrectly!";
            }
        } else {
            return "SQL executed incorrectly!";
        }
    } else {
        return "SQL prepared incorrectly!";
    }
}

function changeProfile($mysqli, $fullname, $email, $phone, $url, $birthday)
{
    $param_username = $param_fullname = $param_email = $param_phone  = $param_url = $param_birthday = NULL;
    session_start();
    $admin = $_SESSION['admin'];
    $sql = "UPDATE admin SET email=?, full_name=?,url=?, telephone=?, date_of_birth=? WHERE username = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param('ssssss', $param_email, $param_fullname, $param_phone, $param_url, $param_birthday, $param_username);

        $param_username = $admin;
        $param_fullname = $fullname;
        $param_email = $email;
        $param_phone  = $phone;
        $param_url = $url;
        $param_birthday = $birthday;

        if ($stmt->execute()) {
            return "Change profile successfully!";
        } else {
            return "SQL executed incorrectly!";
        }
    } else {
        return "SQL prepared incorrectly!";
    }
}

function changePassword($mysqli, $oldPassword, $newPassword)
{
    $param_username = $admin_password = NULL;
    session_start();
    $username = $_SESSION['admin'];

    $sql = "SELECT password FROM admin WHERE username=?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param('s', $param_username);

        $param_username = $username;

        if ($stmt->execute()) {
            $stmt->store_result();
            $stmt->bind_result($admin_password);
            if ($stmt->fetch()) {
                if ($oldPassword != $admin_password) {
                    return "Wrong password!";
                } else {
                    return updatePassword($mysqli, $username, $newPassword);
                }
            } else {
                return "SQL fetch incorrectly!";
            }
        } else {
            return "SQL executed incorrectly!";
        }
    } else {
        return "SQL prepared incorrectly!";
    }
}

function updatePassword($mysqli, $username, $password)
{
    $param_username = $param_password = NULL;
    $sql = "UPDATE admin SET password=? WHERE username=?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param('ss', $param_password, $param_username);

        $param_username = $username;
        $param_password = $password;

        if ($stmt->execute()) {
            return "Change password successfully!";
        } else {
            return "SQL executed incorrectly!";
        }
    } else {
        return "SQL prepared incorrectly!";
    }
}

function logout()
{
    session_start();
    unset($_SESSION["admin"]);
    session_destroy();
}

function changeInfo($mysqli, $address, $phone, $email, $detail)
{
    $param_address = $param_email = $param_phone  = $param_detail = NULL;

    $sql = "UPDATE information SET address=?, email=?, phone=?, detail=?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param('ssss', $param_address, $param_email, $param_phone, $param_detail);

        $param_address = $address;
        $param_email = $email;
        $param_phone  = $phone;
        $param_detail = $detail;

        if ($stmt->execute()) {
            return "Change information successfully!";
        } else {
            return "SQL executed incorrectly!";
        }
    } else {
        return "SQL prepared incorrectly!";
    }
}
