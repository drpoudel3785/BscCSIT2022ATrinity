<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    //gathering informations
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    //preparing query
    $sql = "INSERT INTO users(username, password, email, dob, gender, city, msg) VALUES('$username', '$password', '$email', '$dob', '$gender', '$city', '$message')";

    //connecting to db
    include('inc_connection.php');
    //executing queyr
    $qry=mysqli_query($conn, $sql) or die("Unable to insert data");
    if($qry)
    {
        echo " Data INserted Successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<form method="POST"  action="" name="register" enctype="multipart/form-data" >
        <fieldset>
            <legend>
                Register
            </legend>
            <input type="text" name="username" required placeholder="Username"/><br/>
            <input type="password" name="password" required placeholder="Password"/><br/>
            <input type="password" name="cpassword" required placeholder="ConfirmPassword"/><br/>
            <input type="email" name="email" placeholder="you@domain.com" /><br/>
            <input type="date" name="dob" /><br/>
            <input type="radio" name="gender" value="Male" checked/>Male
            <input type="radio" name="gender" value="Female" />Female
            <input type="radio" name="gender" value="Others" />Otheres 
            <br/>
            <select name="city" size="1">
                <option value="ktm">Kathmandu</option>
                <option value="bhk" selected>Bhaktapur</option>
                <option value="lpt">Lalitpur</option>
                <option value="oth">Others</option>
            </select>
            <br/>
            <textarea rows="5" cols="50" name="message" ></textarea><br/>
            <input type="submit" name="submit" value="Register" />
            <input type="reset" name="cancel" value="Cancel" /><br/>
        </fieldset>
    </form>
    
</body>
</html>