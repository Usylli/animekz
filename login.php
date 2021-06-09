<?php
    $db = mysqli_connect('localhost', 'root', '', 'animekz');
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($db, $_POST['log']);
        $password = mysqli_real_escape_string($db, $_POST['pwd']);
        $errors = array(); 
  
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
    
        if (count($errors) == 0) {
            $query = "SELECT * FROM users WHERE user_name='$username' AND user_password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
            session_start();
            $_SESSION['user_name'] = $username;
            $_SESSION['success'] = "You are now logged in";
            }else {
                array_push($errors, "Wrong username/password combination");
                if (count($errors) > 0) : 
                    foreach ($errors as $error) : 
                        echo "<script>";
                        echo "alert('$error');";
                        echo "</script>";
                    endforeach;
                endif;
            }
            header('refresh:1;url=/animekz2/index.php');
        } else{
            if (count($errors) > 0) : 
                foreach ($errors as $error) : 
                    echo "<script>";
                    echo "alert('$error');";
                    echo "</script>";
                endforeach;
            endif;
        }
        
    }
?>
<style>
#contenedor .contenido {
    margin-top: 0px!important; 
}
#contenedor .contenido .box_item {
    margin: %!important;
}
#contenedor .contenido .box_item {
    margin: 0 0px 0px!important;
}
#loginmain2 {
    font-family: roboto,Segoe UI,Arial,sans-serif;
    background: #151515;
    height: 530px;
    padding: 0;
    width: 400px;
    position: absolute;
    top: 50%;
    margin-top: -260px;
    left: 50%;
    margin-left: -200px;
}
#header2 {
    position: relative;
    width: 100%;
    height: 211px;
    background-image: url(https://4anime.to/static/rbWUiGT.gif);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center bottom;
}
#inputholder {
    width: 300px;
    margin: 0 auto;
    margin-top: 35px;
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
label {
    text-transform: uppercase;
    font-weight: 800;
    font-size: 10px;
    color: #555;
    display: block;
    letter-spacing: 0;
    margin-bottom: 10px;
    margin-top: 20px;
}

element.style {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=);
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: 16px 18px;
    background-position: 98% 50%;
}
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px #151515 inset;
    -webkit-text-fill-color: #fff !important;
}
input {
    outline: 0;
    border: none;
    border-bottom: 2px solid #333;
    padding: 0;
    padding-bottom: 10px;
    background: 0 0;
    width: 300px;
    color: #fff;
    font-family: roboto,Segoe UI,Arial,sans-serif;
    font-size: 16px;
    margin-bottom: 10px;
}
#button {
    cursor: pointer;
    outline: 0;
    padding-left: 30px!important;
    padding-right: 30px!important;
    padding-right: 12px;
    padding-left: 12px;
    padding-top: 14px;
    padding-bottom: 0;
    font-size: 16px;
    border: none;
    background: #e53935;
    color: black;
    width: 150px;
    font-family: roboto,Segoe UI,Arial,sans-serif;
    margin: 0 auto;
    margin-top: 30px;
    box-shadow: 0 1px 2px rgb(0 0 0 / 10%);
}
#switcher {
    display: block;
    border: none;
    outline: none;
    text-decoration: none;
    margin-top: 12px;
    background: 0 0;
    color: #fff;
    font-family: roboto,Segoe UI,Arial,sans-serif;
    font-size: 12px;
}
</style>

<div class="box_item">
<title>Login</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,200,400,500,700' rel='stylesheet' type='text/css'>
<style>
body {
	background:linear-gradient(rgba(0, 0, 0, 0.72), rgba(0, 0, 0, 0.51)), url(https://wallpapercave.com/wp/wp2771916.jpg);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px #151515 inset;
	-webkit-text-fill-color: #fff !important;
}
</style>
<div id="mainholder">
<div style="height: 568px;" id="loginmain2">
<div id="header2">
</div>
<form name="loginform" id="loginform" action="login.php" method="post">
<div id="inputholder">
<p class="tml-user-login-wrap">
<label for="user_login">Username</label>
<input type="text" name="log" id="user_login" class="input" value="" size="20" placeholder="Baka" />
</p>
<p class="tml-user-pass-wrap">
<label for="user_pass">Password</label>
<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" placeholder="•••••••••" autocomplete="off" />
</p>
<center><input type="submit" name="login" id="button" style="padding-bottom: 7px;" value="Sign In"></center>
</p>
</button>
</div>
<center><a href="register.php" id="switcher">Don't have an account?</a></center>
</div>
</form>
</div>
</div>
</div>


