<?php include('./header.php'); ?>
<?php 
//require_once "controllers/login-controller.php";
//require_once "../login-controller.php";
include "../login-controller.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='../images/icon.png'>
    <title>Log In</title>
</head>
<body>
    <fieldset>
    <table align="right">
    <tr>
        <td>
            <nav>
                <a href="./index.php">Home</a> ||
                <a href="./login.php">Log in</a> ||
                <a href="./registration.php">Registration</a>
            </nav>
        </td>
    </tr>        
    </table>
    </fieldset>

    <div width='100px'>
		<form class="login_form" action="../login-controller.php" method="post" name="form" onsubmit="return validated()">
			<fieldset>
                <legend>
				
                    <b>LOG IN</b>
                </legend>
			<table align="center">
			
			<tr>
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			</tr>
			
			<tr>
			<td> <div class="font">User Name</div></td>
			<td><input autocomplete="off" type="text" name="username" value = "<?php if(isset($_COOKIE["username"])) {echo $_COOKIE["username"] ; }?>"></td>
			<td><div id="email_error">Please insert your Username</div></td>
			</tr>
			
			<tr>
			
			<td><div class="font font2">Password</div></td>
			<td><input  type="password" name="password" value = "<?php if(isset($_COOKIE["password"])) {echo $_COOKIE["password"] ; }?>"></td>
			<td><div id="pass_error">Please insert your Password</div></td>
			</tr>
								<tr>
					<td></td>
					<td><input type="checkbox" name="remember"> Remember Me </td><br><br>
					</tr>
					                    <tr>
					<td colspan="2"><hr></td>
            
			<tr>		
			<td align="left"><input type='submit' name="btn_login" value="Submit"></td>
			<td align="left"><a href="./forgotpass.php">Forgot Password</a></td>
			</tr>
			
		</table>
		</fieldset>
		</form>
	</div>	
	<script src="valid.js"></script>
	
	
	 <?php include('./footer.php'); ?>
</body>
</html>