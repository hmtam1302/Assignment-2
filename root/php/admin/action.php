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
if ($action =="edit_user")
{
    $id = $_POST['id']; 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $full_name = $_POST['fullname'];
    $url = $_POST['url'];
    $telephone = $_POST['telephone'];
    $date_of_birth = $_POST['date_of_birth'];
    echo editUser($mysqli,$id,$username,$email,$full_name,$url,$telephone,$date_of_birth);
}
/*if ($action =="delete_user")
{
    $id =$_POST['id'];
    echo deleteUser($mysqli,$id);
}*/

if ($action == "edit_product") {
    $old_id = $_POST['old_id'];
    $new_id = $_POST['new_id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $type = $_POST['type'];
    $url = $_POST['url'];
    $price = $_POST['price'];

    //Check if new id exist
    if (checkProductId($mysqli, $old_id, $new_id)) {
        echo "New ID existed, please choose another one!";
    } else {
        echo changeProduct($mysqli, $old_id, $new_id, $name, $author, $type, $url, $price);
    }
}
if ($action == "delete_product") {
    $id = $_POST['id'];
    echo deleteProduct($mysqli, $id);
}

function deleteProduct($mysqli, $id)
{
    $param_id = NULL;
    $sql = "DELETE FROM product WHERE id=?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param('i', $param_id);

        $param_id = $id;

        if ($stmt->execute()) {
            return "Delete product successfully!\n" . deleteCommentWithProductId($mysqli, $id);;
        } else {
            return "SQL executed incorrectly!";
        }
    } else {
        return "SQL prepared incorrectly!";
    }
}

function deleteCommentWithProductId($mysqli, $product_id)
{
    $param_product_id = NULL;
    $sql = "DELETE FROM comment WHERE product_id=?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param('i', $param_product_id);

        $param_product_id = $product_id;

        if ($stmt->execute()) {
            return "Delete comment with product_id = " . $product_id . " successfully!";
        } else {
            return "SQL executed incorrectly!";
        }
    } else {
        return "SQL prepared incorrectly!";
    }
}

function changeProduct($mysqli, $old_id, $new_id, $name, $author, $type, $url, $price)
{
    $param_id = $param_name = $param_author = $param_type  = $param_url = $param_price = $id = NULL;
    $sql = "UPDATE product SET id=?, name=?,author=?, type=?, url=?, price=? WHERE id = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param('issssii', $param_id, $param_name, $param_author, $param_type, $param_url, $param_price, $id);

        $param_id = $new_id;
        $param_name = $name;
        $param_author = $author;
        $param_type  = $type;
        $param_url = $url;
        $param_price = $price;
        $id = $old_id;

        if ($stmt->execute()) {
            return "Change product information successfully!";
        } else {
            return "SQL executed incorrectly!";
        }
    } else {
        return "SQL prepared incorrectly!";
    }
}

function checkProductId($mysqli, $old_id, $new_id)
{
    $param_id = NULL;
    if ($old_id == $new_id) return false;
    $sql = "SELECT id FROM product WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $param_id);
    $param_id = $new_id;
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows >= 1) {
        return true;
    }
    return false;
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
function editUser($mysqli,$id,$username,$email,$full_name,$url,$telephone,$date_of_birth)
{
    $sql = "UPDATE users SET username=?,email=?, 
    full_name=?,url=?,telephone=?,date_of_birth=? where id=?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param('sssssdi', 
        $param_username,
        $param_email, 
        $param_fullname,
        $param_url,
        $param_telephone,
        $param_birthday,
        $param_id
        );

        $param_username = $username;
        $param_email = $email;
        $param_fullname = $full_name;
        $param_url = $url;
        $param_telephone  = $telephone;
        $param_birthday = $date_of_birth;
        $param_id=$id;
        if ($stmt->execute()) {
            return "Change user information successfully!";
        } else {
            return "SQL executed incorrectly!";
        }
    } else {
        return "SQL prepared incorrectly!";
    }

}
/*function deleteUser($mysqli,$id)
{
    $sql = "DELETE FROM user WHERE id=1";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
*/
