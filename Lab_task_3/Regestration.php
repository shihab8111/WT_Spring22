<?php  
$nameErr = $emailErr = $genderErr = $usernameErr = $passwordErr = $confirmPasswordErr = $dobErr = "";
$message = '';
 
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $nameErr = "Name is required";  
      }
      else if(strlen($_POST["name"]) <= 2)
      {
        $nameErr = "At least two words required"; 
      }
      else if( preg_match("/[0-9]/", $_POST["name"]))
      {
          $nameErr="Numbers are not allowed";
      }
      else if (!preg_match("/^[a-zA-Z-. ?!]/",$_POST["name"]))
        {
            $nameErr = "Only contain letters,period,dash";
        }
      else if(empty($_POST["email"]))  
      {  
          $emailErr = "Email is required";  
      }  
      else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
      {
	    $emailErr = "Enter a valid email";
      }
      else if(empty($_POST["userName"]))  
      {  
          $usernameErr = "Username is required";  
      }  
      else if(empty($_POST["password"]))  
      {  
          $passwordErr = "password is required";  
      }
      else if(strlen($_POST["password"]) <=6)  
      {  
          $passwordErr = "at least 6 character requried";  
      }
      else if (preg_match("/^[!@#$%^&*()]/",$_POST["password"]))
        {
            $passwordErr = "Use special character, @,#,$,%,^,&";
        }
      else if(empty($_POST["confirmPassword"]))  
      {  
          $confirmPasswordErr = "Confirm password is required";  
      } 
      else if($_POST["password"] != $_POST["confirmPassword"])
      {
          $confirmPasswordErr = "Password did not match";
      }
      else if(empty($_POST["gender"]))  
      {  
          $genderErr = "Select your gender";  
      } 
      else if(empty($_POST["dob"]))  
      {  
          $dobErr = "Select a date";  
      }  
       
      
 } 


?>  




<?php include 'navbar.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regestration</title>
    <style>
    fieldset{margin: 0 auto;} 
    .checkErr 
    {
         color: #FF0000;
         font-size: 13px;

    }
   
    .successText{
        color: green;
    }

    </style>
    
</head>
<body>
    <form method="post">
        <fieldset style="width: 500px; ">
            <legend><b>REGISTRATION</b></legend>
            Name: <input type="text" name="name">
            <span class="checkErr">* <?php echo $nameErr;?></span><br>
            <hr style="border: 0.1px solid;">
            Email: <input type="text" name="email">
            <span class="checkErr">* <?php echo $emailErr;?></span><br>
            <hr style="border: 0.1px solid;">
            User Name: <input type="text" name="userName">
            <span class="checkErr">* <?php echo $usernameErr;?></span><br>
            <hr style="border: 0.1px solid;">
            Password: <input type="text" name="password">
            <span class="checkErr">* <?php echo $passwordErr;?></span><br>
            <hr style="border: 0.1px solid;">
            Confirm Password: <input type="text" name="confirmPassword">
            <span class="checkErr">* <?php echo $confirmPasswordErr;?></span><br>
            <hr style="border: 0.1px solid;">
            <fieldset>
                <legend><b>Gender</b></legend>
                <input type="radio" id="male" name="gender" value="male">Male
                <input type="radio" id="female" name="gender" value="female">Female
                <input type="radio" id="other" name="gender" value="other">Other
                <span class="checkErr">* <?php echo $genderErr;?></span><br>
            </fieldset>
            <hr style="border: 0.1px solid;">
            <fieldset>
                <legend><b>Date of Birth</b></legend>
                <input type="date" name="dob"   size="2"> 
                <span class="checkErr">* <?php echo $dobErr;?></span><br>
            </fieldset>
            <hr style="border: 0.1px solid;">

            <input type="submit" name="submit">
            <input type="Reset"><br>
            <?php echo $message?>
        </fieldset>
    </form>
</body>
</html>
<?php include 'Footer.php';?>
