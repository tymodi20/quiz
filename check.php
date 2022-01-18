
<?php 
session_start();
if(isset($_SESSION['user']))
{

        if(isset($_POST['check']))
      {
     $a1 = $_POST['Q1opt1'];
     $a2 = $_POST['Q2opt1'];
     $a3 = $_POST['Q3opt1'];
       $marks = 0;
  
  if("tanmay" == $a1)
  { 
         $marks++;      
  }
  if("rasmus lerdorf" == $a2)
  {
           $marks++;
  }
  
  if("spider" == $a3)
  {
          $marks++;
  } 


echo "<h1> your result :- ". $marks." </h1>" ;
$_SESSION['result'] = $marks;
header('location:home.php');

}
}
else {
  echo "<script> alert('Not access !! Login '); </script>";
  echo '<script> window.location = "login.html";</script>';
    
}


?>

