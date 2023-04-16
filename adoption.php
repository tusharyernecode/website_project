<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost' , 'root' ,'', 'adoption') or die("Connection Failed:" .mysqli_connect_error());
    if(isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['pname']) && isset($_POST['message'])) {
        $fname= $_POST['fname'];
        $email = $_POST['email'];
        $pname= $_POST['pname'];
        $message = $_POST['message'];
       

        
        $sql = "INSERT INTO `adopt` (`fname`,`pname`, `email`, `message`) VALUES ('$fname', '$email','$pname', '$message')";

        $query= mysqli_query($conn,$sql);
        if($query){
          echo "<script>alert('Thank You For Adoption')</script>";
        }
        else{
             echo"Error Occurred";
        }
    }
  }
?>