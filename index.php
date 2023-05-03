<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="index_style.css">
	<link rel="stylesheet" type="text/css" href="instruction.css">
</head>
<body>


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
  <nav class="navbar">

	<div class="logo">PuzzleLand</div>

	<!-- NAVIGATION MENU -->
	<ul class="nav-links">

	<!-- NAVIGATION MENUS -->
	<div class="menu">

		<li><a href="index.php">Home</a></li>
		<li><a href="aboutpage.php">About</a></li>

		<li><a href="instructions.php">Instructions</a></li>
		<li><p class=uname><strong><?php echo $_SESSION['username']; ?></strong></p></li>
		<li><a href="index.php?logout='1'" style="color: red;">logout</a></li>
	</div>
	</ul>
  </nav>
  <!-- <input type=button onClick="parent.location='Ques1.php'"
 value='START'> -->
 <h1 >About Puzzle Land</h1>
    <p class="para">Welcome to our website! We are proud to offer a variety of fun and challenging puzzles that will help keep your brain sharp and engaged. Whether you are a puzzle enthusiast or just looking for a fun way to pass the time, we have something for everyone. Our puzzles are designed to be both enjoyable and mentally stimulating, so you can have fun while also improving your cognitive abilities. And don't worry if you reach a dead end – our puzzles are designed to be restarted, so you can keep working on them until you solve them. So take a break from your daily routine and try out some of our exciting puzzles. We're sure you'll find them both entertaining and beneficial for your mental well-being.</p>
	<br><br><h1 >Instructions</h1>
	
    <ul class="instruct">
        <li class="ins">To begin solving the puzzle, navigate to the home page and click on the "Start" button.</li>
        <li class="ins">As you encounter each question, take the time to read through it thoroughly to ensure you understand what is being asked.</li>
        <li class="ins">When you are confident in your answer, carefully enter it into the provided input field.</li>
        <li class="ins">Once you have entered your answer, use the "Submit" button to move on to the next step of the puzzle.</li>
    </ul>
	<p style=" color:cadetblue;
    font-size: xx-large;
    padding-left: 100px;
	padding-right:100px;
	font-weight: 200;"class="att" > 
Welcome to our puzzle game! To get started, please take a moment to read the instructions carefully. Once you are ready, click on the "Start" button below to begin the puzzle. Remember to pay close attention to each question and answer it to the best of your ability. Good luck and have fun!</p>
 <div class="bc" style="text-align:center;
 padding-bottom:100px">
 <form method="post" action="Ques1.php">
  <input class="start" type="submit" name="start" value="Start">
</form>
 </div>

    <?php endif ?>
</div>

</body>
</html>