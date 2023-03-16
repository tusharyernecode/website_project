<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Now - PAW</title>
    <link rel="stylesheet" href="./style.css" >
    <link rel="shortcut icon" type="image/jpg" href="./logoweb.png"/>
</head>
<body>
    
<a class="btn" href="index.php">Back to Home</a>
<div class="heading">
🌱Donate Now
</div>

<div class="image">
<img src="./logoweb.png" alt="image">

</div>
     <form method="POST" action="get.php">
      <div class="name">
         <label for="name">Name </lable>
       <input type='text' placeholder="Enter Your Name" name='name' id='name' required></input> 
       </div>
       

       <div class="email">
       <label for="email">Email </lable>
       <input type='email' placeholder="xyz@gmail.com" name='email' id='email' required></input>
</div>

      <div class="amount">
       <label for="amount">Amount </lable>
       <input type='text' name='amount' placeholder="Enter Your Amount" id='amount' required></input>
       </div>

       <div class="share">
       <label for="share"> Share Your Vision </lable>
       <input type='text' name='share' placeholder="Write Here" id='share' required></input>
         </div>
       
         <div class="submit">
       <input type='submit' name='submit' id="submit" />
</div>
<h3>Payment :</h3>
<div class="chck1">
    
<input type="checkbox" id="chck1" name="chck1" required>
<label for="vehicle1"> UPI </label><br>
</div>

<div class="chck2">
    
<input type="checkbox" id="chck2" name="chck2" required>
<label for="vehicle1"> Other </label><br>
</div>
    </form>
</body>
</html>