<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost' , 'root' ,'', 'donation') or die("Connection Failed:" .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount'])  && isset($_POST['share'])) {
        $name= $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
       
        $share = $_POST['share'];
        $payment_method = $_POST['payment_method'];

        
        $sql = "INSERT INTO `users` (`name`, `email`, `amount`, `share`,`payment_method`) VALUES ('$name', '$email', '$amount','$share','$payment_method')";

        $query= mysqli_query($conn,$sql);
        if($query){
          echo "<script>alert('Thank You For Donation')</script>";
        }
        else{
             echo"Error Occurred";
        }
    }
  }
?>