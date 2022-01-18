<?php 
$con = mysqli_connect("localhost","debian-sys-maint","NxOuewSDKEn2QuJc","quiz");
if(!$con)
{
    echo "done";
}

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $userpassword = $_POST['password'];
    $useremail = $_POST['email'];
    $usermobile = $_POST['mobile'];
  
 
 
    $sql = "INSERT INTO register(username,pass,email,mobile) VALUES('$username','$userpassword','$useremail','$usermobile')";

    if(mysqli_query($con,$sql))
    
    {
       header('location:login.html');
    }
    else{
        echo "wrong";
    }
}


?>