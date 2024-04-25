<?php
include("login.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" >
    <meta name="viewport"
    content="width=device-width",initial-scale=1.0">

    <title>Login form</title>
    <link rel="stylesheet" href="main.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="loggedin.php" onsubmit="return isvalid()"method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="username" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="password"placeholder="password" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href = "#">Forgot Password?</a>
            </div >
            <button type="submit" class="btn">Login</button>
            <div class ="register-link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
            </form>
    </div>
	<script>
		function isvalid(){
			var username = document.form.username.value;
			var password = document.form.password.value;
			if(username.length==""&& password.length==""){
				 alert("username and password field is empty");
			    return false
			}
			
		}
		</script>

</body>
</html>