<?php 
include "config.php";
session_start();
if(isset($_SESSION['user']))
{



$user = $_SESSION['user'];
$sql  = "select username from register where email = '$user'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$user1 = $row['username'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>
  <body>
  
</nav> 
  <div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">   
            <a href="#" class="navbar-brand text-light ">quiz</a>  
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-danger" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link text-light ">Home</a>
                    <a href="logout.php" class="nav-item nav-link text-light">Logout</a>
                 
   
                </div>
                
                <div class="navbar-nav ms-auto">
                    
                </div>
            </div>
               <span class="navbar-text text-white">
     <?php echo "Name :-   ". $user1;?>
    </span>
        </div>
    </nav>
</div>
<form action="check.php" method="POST">
<h3>who is developer of apkhappy website?</h3>
<input type="radio" name="Q1opt1" value="ravi">ravi
<input type="radio" name="Q1opt1" value="rahul">rahul
<input type="radio" name="Q1opt1" value="tanmay">tanmay

<h3>who is developer of php ?</h3>
<input type="radio" name="Q2opt1" value="rasmus lerdorf">rasmus lerdorf
<input type="radio" name="Q2opt1" value="raul">raul
<input type="radio" name="Q2opt1" value="ravi steer">ravi steer

<h3>which bot use for crawling or indexing web?</h3>
<input type="radio" name="Q3opt1" value="bettle">bettle
<input type="radio" name="Q3opt1" value="robot">robot
<input type="radio" name="Q3opt1" value="spider">spider
<br><br>

<input type= "submit" name="check" value="submit"> 
<?php


if(isset($_SESSION['result']))
{
  $uresult = $_SESSION['result'];
echo "<h1> your result :- ". $uresult." </h1>" ;
}


?>
</form>




<?php
}

else
{
echo "<script> alert('Login First'); </script>";
echo '<script> window.location = "login.html";</script>';
}

?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>