const primaryColor = '#4834d4';
const warningColor = '#f0932b';
const successColor = '#6ab04c';
const dangerColor = '#eb4d4b';

const themeCookieName = 'theme';
const themeDark = 'dark';
const themeLight = 'light';

const body = document.getElementsByTagName('body')[0];

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return ""
}

loadTheme()

function loadTheme() {
    var theme = getCookie(themeCookieName);
    body.classList.add(theme === "" ? themeLight : theme);
}

function switchTheme() {
    if (body.classList.contains(themeLight)) {
        body.classList.remove(themeLight);
        body.classList.add(themeDark);
        setCookie(themeCookieName, themeDark);
    } else {
        body.classList.remove(themeDark);
        body.classList.add(themeLight);
        setCookie(themeCookieName, themeLight);
    }
}

function collapseSidebar() {
    body.classList.toggle('sidebar-expand');
}

window.onclick = function (event) {
    openCloseDropdown(event)
}

function closeAllDropdown() {
    var dropdowns = document.getElementsByClassName('dropdown-expand');
    for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].classList.remove('dropdown-expand');
    }
}

function openCloseDropdown(event) {
    if (!event.target.matches('.dropdown-toggle')) {
        // 
        // Close dropdown when click out of dropdown menu
        // 
        closeAllDropdown()
    } else {
        var toggle = event.target.dataset.toggle;
        var content = document.getElementById(toggle);
        if (content.classList.contains('dropdown-expand')) {
            closeAllDropdown();
        } else {
            closeAllDropdown();
            content.classList.add('dropdown-expand');
        }
    }
}


function login() {
    var usernameValue = document.getElementById('username').value;
    var passwordValue = document.getElementById('password').value;

    $.post(
        "action.php",
        { action: "login", username: usernameValue, password: passwordValue },
        function (data, status) {
            alert(data);
            if (data == "Login successfully!") window.location.href = "dashboard.php";
        }
    );
}


function validateConfirm() {
    var newpassword = document.getElementById('new-password-change').value;
    var confirmpassword = document.getElementById('confirm-password-change').value;
    if (newpassword != confirmpassword) {
        document.getElementById('confirmErr').innerHTML = "Confirm password does not match!!!";
    }
    else {
        document.getElementById('confirmErr').innerHTML = "";
    }
}

function changeProfile() {
    var fullnameValue = document.getElementById("full-name").value;
    var emailValue = document.getElementById("email-profile").value;
    var phoneValue = document.getElementById("phone-profile").value;
    var urlValue = document.getElementById("url-profile").value;
    var birthdayValue = document.getElementById("birthday").value;

    $.post(
        "action.php",
        { action: "edit_profile", fullname: fullnameValue, email: emailValue, phone: phoneValue, url: urlValue, birthday: birthdayValue },
        function (data, status) {
            alert(data);
            if (data == "Change profile successfully!") window.location.href = "dashboard.php";
        }
    );
}

function changePassword() {
    var oldPassword = document.getElementById("password-change").value;
    var newPassword = document.getElementById("new-password-change").value;

    $.post(
        "action.php",
        { action: "change_password", old_password: oldPassword, new_password: newPassword },
        function (data, status) {
            alert(data);
            if (data == "Change password successfully!") logOut();
        }
    );
}

function logOut() {
    $.post(
        "action.php",
        { action: "logout" },
        function (data, status) {
            window.location.href = "login.php";
        }
    );
}

function changeInfo() {
    var addressValue = document.getElementById('address').value;
    var telephoneValue = document.getElementById('telephone').value;
    var emailValue = document.getElementById('email-info').value;
    var detailValue = document.getElementById('detail').value;

    $.post(
        "action.php",
        { action: "change_info", address: addressValue, phone: telephoneValue, email: emailValue, detail: detailValue },
        function (data, status) {
            alert(data);
            if (data == "Change information successfully!") window.location.href = "dashboard.php";
        }
    )
}

function checkEnter(e){
    if (e.keyCode === 13) {
        //Search for products here
        login();
    }
}
/*function deleteUser(){
    var id = document.getElementById('id').value;
    $.post(
        "action.php",
        { action: "delete_user", id: addressValue},
        function (data, status) {
            alert(data);
            if (data == "Delete User successful!!!") window.location.href = "dashboard.php";
        }
    )
}*/

function editProduct(product_id_value) {
    var idValue = document.getElementById('id-edit').value;
    var nameValue = document.getElementById('name-edit').value;
    var authorValue = document.getElementById('author-edit').value;
    var typeValue = document.getElementById('type-edit').value;
    var urlValue = document.getElementById('url-edit').value;
    var priceValue = document.getElementById('price-edit').value;

    $.post(
        "action.php",
        { action: "edit_product", old_id: product_id_value, new_id: idValue, name: nameValue, author: authorValue, type: typeValue, url: urlValue, price: priceValue },
        function (data, status) {
            alert(data);
            if (data == "Change product information successfully!")
                window.location.href = "product.php";
        }
    );
}

function deleteProduct(product_id) {

    if (confirm("Delete this products?")) {
        $.post(
            "action.php",
            { action: "delete_product", id: product_id },
            function (data, status) {
                alert(data);
                if (data == "Delete product successfully!\nDelete comment with product_id = " + product_id + " successfully!")
                    window.location.href = "product.php";
            }
        );
    }
}