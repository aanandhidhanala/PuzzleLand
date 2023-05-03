<?php
// check if the form has been submitted
if(isset($_POST['password'])) {
  // get the user's answer
  $answer = $_POST['password'];
  
  // check if the answer is correct
  if($answer == '12345678') {
    // redirect to the second question
    header('Location: admin.php');
    exit;
  } else {
    echo "<br>";
    echo "<p align='center' style='color: red;'>Incorrect. Please try again.</p>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Puzzle Land Admin Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="adminlogin.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Sign in</button>
  	</div>
  </form>
</body>
</html>

