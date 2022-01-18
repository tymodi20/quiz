<?php 
include "config.php";
session_start();

if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$email = $_POST['email'];
$sql = "select * from register where email = '$email' AND pass = '$password'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
if($row['email']== $email && $row['pass'] == $password)
{
    header('location:home.php');
    $_SESSION['user'] = $email;
    
}
else{
    echo "wrong";
}


}
?>
