<?php
session_start();
include("db_config.php");
$dbconn = pg_connect($db_conn_string);
$error = "";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $uname = $_POST["username"];
    $passwd = $_POST["password"];
    $sql = "SELECT * FROM account WHERE username = '".$uname."' AND password = '".$passwd."'";
    $data = pg_query($dbconn,$sql);
    if (pg_num_rows($data) == 1){
        $info = pg_fetch_array($data);
        $role = $info["role"];
        $_SESSION["role"] = $role;
        $_SESSION["refresh"] = '';
        $_SESSION["selected_shop"] = "All_Shops";
        header("location: db_mng.php");
    }
    else $error = "Wrong username or password.";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>ATN Login Form</title>
		<link rel="stylesheet" href="login.css">
		<script type="text/javascript" src="login.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=0.65">
		<script src="https://kit.fontawesome.com/68c0d6e5f7.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<a href="index.php"><i class="fas fa-home"></i></a>
		<div class="center">
			<h1>Login to ATN</h1>
			<form method="post">
				<div class="txt_field">
					<input type="text" name="username" placeholder="Username" required>
				</div>
				<div class="txt_field">
					<input type="password" name="password" placeholder="Password" required>
				</div>
				<input type="submit" value="Log In" name="login">
			</form>
			<p><?php echo $error?></p>
		</div>
	</body>
</html>
