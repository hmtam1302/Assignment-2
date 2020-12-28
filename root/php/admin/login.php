<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form method="post">
            <input type="text" name="u" placeholder="Username" required="required" id="u"/>
            <input type="password" name="p" placeholder="Password" required="required" id="p"/>
            <button type="submit" class="btn btn-primary btn-block btn-large" onclick="login();">Let me in.</button>
        </form>
    </div>
</body>
<script>
    function login(){
        var u = $('u').val();
        var p = $('u').val();
        $.ajax({
            url: "backend/login.php",
            type: 'post',
            data: {
                checkLogin: 'check',
                username: u,
                password: p
            },
            success: function(data, status) {
                if (data == 'fail') {
                    alert('login fail');
                } else {
                    window.location.replace("home.html");
                }
            }
        });
    }
</script>
</html>
