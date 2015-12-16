<?php

$name = "Shawn";
$location = "Massachusetts";
$full_name = "Shawn the Sasquatch";
$name = $full_name;

?>


<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $name ?> | Treehouse Profile</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/avatar.png" alt="<?php echo $name ?>">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location ?></p>
      <hr />
      <p>Welcome to PHP Basics!</p>
      <hr />
      <ul class="social">
        <li><a href=""><img class="twitter" src="img/twitter.png"></span></a></li>
      </ul>
    </section>
    <section class="main">
      <p>Let's Get Started!</p>
      <p><?php echo "Hello, World!" ?></p>
    </section>
  </body>
</html>
