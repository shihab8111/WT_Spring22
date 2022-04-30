
<?php 
session_start();
?>
<?php 

if(isset($_SESSION['User'])){

}

else
{
    header("location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php include('header.php'); ?>
    <fieldset>
    <br>
        <nav>
            Logged in as  <?php echo $_SESSION['User'] ?> ||
            <a href="../controller/logout.php">Log Out</a>
        </nav>
        <br>
    </fieldset>

    <table border="1px solid black" width='100%'>
        <tr>
            <td border="1px solid black">
                <label>Dashboard</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./dashboard.php'>Dashboard</a></li>
                    <li><a href='./profile.php'>View Profile</a></li>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='../Products/addCustomer.php'>Crud Products</a></li>
                    <li><a href='../Search_Product'>Search Products</a></li>
					<li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td width='70%'>
                <table align="right" border="1px solid black">
				

                <b> <?php echo 'Welcome ' .$_SESSION['User'] ?></b>
                    <br><br><br>

                </table>
                <br>
            </td>
        </tr>
    </table>
    <?php include('footer.php'); ?>    
</body>
</html>

