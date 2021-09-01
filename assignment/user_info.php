<?php
include'connection.php';
// session_start();
// if(isset($_SESSION["active"])){
//     header("location:user_info.php");

if (isset($_POST["submit"])){
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $email=$_POST["email"];
    $dob=$_POST["dob"];
    $mobile_no=$_POST["mobile_no"];
    $designation=$_POST["designation"];
    $gender=$_POST["gender"];
    $hobbies=$_POST['hobbies'];
    $sql="INSERT INTO `user_info`(`first_name`,`last_name`,`email`,`dob`,`mobile_no`,`designation`,`gender`,`hobbies`)
    VALUES('$first_name','$last_name','$email','$dob','$mobile_no','$designation','$gender','$hobbies')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "successfully";
    }
    else{
        echo"error".$conn->error;
    }
    
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body{
    text-align:center;
}
</style>
    <h1> Registration form </h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form </title>
</head>
<body>
<form action="" method="post" autocomplete="on" > 
<label for="first_name">First name:</label>
<input type="text" id="first_name" name="first_name" Required><br><br>

<label for="last_name">Last name:</label>
<input type="text" id="last_name" name="last_name" Required><br><br>

<label for="email">Email:</label>
<input type="email" id="email" name="email" Required><br><br>

<label for="dob">DOB:</label>
<input type="date" id="dob" name="dob" Required><br><br>

<label for="mobile_no">Mobile no:</label>
<input type="number" id="mobile_no" name="mobile_no" Required><br><br>

<label for="designation">Designation:</label>
<input type="text" id="designation" name="designation" Required><br><br>

<label for="gender"> Gender:</label>
<input type="radio" name="gender" value="male">Male</label><br>
<label>
<input type="radio" name="gender" value="female">Female</label><br><br>

<label for="hobbies">Hobbies:</label>
<input type="checkbox" name="hobbies" value="cooking">Cooking<br>
<input type="checkbox" name="hobbies" value="reading book">Reading book<br>
<input type="checkbox" name="hobbies"value="playing">Playing<br>
<input type="checkbox" name="hobbies" value="travelling">Travelling<br><br>

<input type="submit" name="submit" value="Submit" id="submit">
</body>
</html>