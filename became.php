<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Became A Volunteer -PAW</title>
    <link  rel="stylesheet" href="./became.css" >
    <link rel="icon" type="image/x-icon" href="./logoweb.png">
</head>
<body>
<a class="btn" href="./index.php">Back</a>

    <h1>Became A Volunteer</h1>

    <form action="get1.php" method="post">
    <div class="container">
  <form>
    <ul class="flex-outer">
      <li>
        <label for="first-name">First Name</label>
        <input type="text" id="fname" placeholder="Enter your first name here">
      </li>
      <li>
        <label for="last-name">Last Name</label>
        <input type="text" id="lname" placeholder="Enter your last name here">
      </li>
      <li>
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter your email here">
      </li>
      <li>
        <label for="phone">Phone</label>
        <input type="tel" id="mnumber" placeholder="Enter your phone here">
      </li>
      <li>
        <label for="message">Message</label>
        <textarea rows="6" id="message" placeholder="Enter your message here"></textarea>
      </li>
      <div class="submit">
      <input type='submit' name='submit' id="submit" />
</div>
  </form>
</div>
    </form>
</body>
</html>