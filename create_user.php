<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="create_user.css">

  <script src="https://kit.fontawesome.com/b99f873ad9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="create_user.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
  <?php
    include 'nav.php';
  ?>
  <div class="wrapper fadeInDown">
 
  <div id="formContent">

    <div class="fadeIn first">
    
    <form action="insert.php" method="POST">
        <i class="fas fa-id-card"></i> <input type="text" id="login" class="fadeIn second" name="name" placeholder="Enter Your Name" required>
        <br><i class="fas fa-envelope"></i> <input type="email" id="email" class="fadeIn third" name="email" placeholder="email" required>
        <br><i class="fas fa-rupee-sign"></i><input type="number" id="balnce" class="fadeIn second" name="bal" placeholder="Balance" required>
        <input type="submit" class="fadeIn fourth" value="create user">
      </form>
    </div>
  </div>
  </div>
</body>
</html>