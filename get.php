<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost' , 'root' ,'', 'donation') or die("Connection Failed:" .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount']) && isset($_POST['share'])) {
        $name= $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $share = $_POST['share'];

        $sql = "INSERT INTO `users` (`name`, `email`, `amount`, `share`) VALUES ('$name', '$email', '$amount', '$share')";

        $query= mysqli_query($conn,$sql);
        if($query){
            echo"Donation Successful";
        }
        else{
             echo"Error Occurred";
        }
    }
  }
?>
