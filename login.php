<?php
   //checking the form is submitted or not
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
       $uname = $_POST['username'];
       $upass = $_POST['password'];

       if($uname=='admin' && $upass=='admin123')
       {
           header("Location: dashboard.php");
       }
       else{
           echo "Sorry! Credential Error!";
       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST"  action="" name="login" enctype="multipart/form-data" >
        <fieldset>
            <legend>
                Login
            </legend>
            <input type="text" name="username" required placeholder="Username"/><br/>
            <input type="password" name="password" required placeholder="Password"/><br/>
            <input type="submit" name="submit" value="Login" /><br/>
        </fieldset>
    </form>
    
</body>
</html>