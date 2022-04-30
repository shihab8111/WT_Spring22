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
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='./images/favicon.png'>
    <title>Change Password</title>
</head>

  
   
   




<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <div width='100px'>
	
<?php 


$Email= "aburushed@gmail.com";//////get it from sesssion $_SESSION["username"];
if(isset($_POST["curpass"]))
{
 $cur=$_POST["curpass"];
 $new=$_POST["newpass"];
 $conf=$_POST["conpass"];
 
 if($new <> $conf)
 {
  echo "<h4 style='color:red'>New password and Confirm Password is not Matched</h4>";
 }
 else{
  
  $sql="select * from login where Email='$Email' and password='$cur'";
 
      $result=$con->query($sql);
      
        if(mysqli_num_rows($result)>0)
       {
          $sql="update login set password='$new' where Email='$Email' and password='$cur'";
         
         if($con->query($sql))
    {
     echo "<h4 style='color:green'>Password has been changed</h4>";
    }
    else
    {
           echo "<h4 style='color:red'>Invalid Current password</h4>";
    }
   
        }
       else
   {
    echo "<h4 style='color:red'>Invalid Current password</h4>";
   }
  
  
  
  
 }
 
}


?>  
	  
	  
	  
	  
	  
	  
    <fieldset>
    <br>
        <nav>
Logged in as  ||
            <a href="../controller/logout.php">Log Out</a>
        </nav>
    <br>

	  
</fieldset>
    <table border="1px solid black" width='70%'>
        <tr>
            <td>
                <label>Change Password</label>
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
            <td>
	
	
        
		<form action="" method="post">
            <fieldset>
                <legend>
                    <b>Change Password</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">Current Password:</td>
                        <td><input type='password' name='curpass' required/></td>
                    </tr>
                    <tr>
                        <td align="right">New Password:</td>
                        <td><input type='password' name='newpass' required/></td>
                    </tr>
                    <tr>
                        <td align="right">Retype New Password:</td>
                        <td><input type='password' name='conpass' required/></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Change"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
		
		
		
            </td>
        </tr>
    </table>

    </div>
    <?php include('./footer.php'); ?>
</body>
</html>