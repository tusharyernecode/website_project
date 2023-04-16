<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost' , 'root' ,'', 'donation') or die("Connection Failed:" .mysqli_connect_error());
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']) ) {
        $fname= $_POST['fname'];
        $lname = $_POST['lname'];
        $email= $_POST['email'];
        $mnumber = $_POST['phone'];
        $message= $_POST['message'];

        
        $sql = "INSERT INTO `volunteer` (`fname`, `lname`, `email`, `phone`,`message`) VALUES ('$fname', '$lname', '$email','$message',$phone)";

        $query= mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($query){
          echo "done";
        }
        else{
             echo"Error Occurred";
        }
    }
  }
?> 
