<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Now - PAW</title>
    <link rel="stylesheet" href="./style.css" >
    <link rel="icon" type="image/x-icon" href="./logoweb.png">
</head>
<body>
    
<a class="btn" href="index.php">Back to Home</a>

<div class="heading">
Adopt Now
</div>


     <form method="POST" action="adopt.php">
      <div class="name">
         <label for="name">Name </lable>
       <input type='text' placeholder="Enter Your Name" name='name' id='name' required></input> 
       </div>
       

       <div class="email">
       <label for="email">Email </lable>
       <input type='email' placeholder="xyz@gmail.com" name='email' id='email' required></input>
</div>

      <div class="amount">
       <label for="pname">Pet Name </lable>
       <input type='text' name='pname' placeholder="Enter Pet Name" id='pname' required></input>
       </div>

       <div class="share">
       <label for="share"> Share Your Vision </lable>
       <input type='text' name='share' placeholder="Write Here" id='share' required></input>
         </div>
       
         <div class="submit"> <input type='submit' name='submit' id="submit" />
      
</div>
</body>
</html>