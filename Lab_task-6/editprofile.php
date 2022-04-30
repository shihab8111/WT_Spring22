<?php  
require_once '../controller/studentInfo.php';

$students = fetchAllStudents();

//require_once '../controller/studentInfo.php';
//$student = fetchStudent($_GET['id']);
?>
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
    <title>Edit Profile</title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <fieldset>
    <br>
        <nav>
Logged in as  ||
            <a href="../controller/logout.php">Log Out</a>
        </nav>
    <br>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td>
                <label>Edit Profile</label>
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
                 <form action="controller/updateStudent.php" method="POST" enctype="multipart/form-data">
                    <table align="center" border="1px solid black" width='60%'>
					<?php foreach ($students as $i => $student): ?>
                        <tr>
                            <td width='40%' align="right">
                                Name:
                            </td>
                            <td>
                                <input type='text' name = 'name' value="<?php echo $student['username'] ?>" required/>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Email:
                            </td>
                            <td>
                                <input type='email' name = 'email' value="<?php echo $student['Email'] ?>" required/>
                            </td>
                        </tr>

                        <tr>
                            <td align="right">
                                Contact_Number:
                            </td>
                            <td>
                                <input type='text' name = 'cn' value="<?php echo $student['Contact_Number'] ?>" required/>
                            </td>
                        </tr>

                        <tr>
                            <td align="right">
                                Address:
                            </td>
                            <td>
                                <input type='text' name = 'address' value="<?php echo $student['Address'] ?>" required/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
									<input type="submit" name = "updateStudent2" value="Update">
                                </center>
                            </td>
                        </tr>
						
                    </table>
                </form>
                <br>
            </td>
        </tr>
		<?php endforeach; ?>
    </table>
    <?php include('./footer.php'); ?>
</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'eweb');

if (isset($_POST['updateStudent2']))
{
	
	$selectQuery = "UPDATE login set username = ?,Email = ?, Contact_Number = ?, Address = ? where id = 1";
	$query_run = mysqli_query($connection,$selectQuery);
}	
?>



