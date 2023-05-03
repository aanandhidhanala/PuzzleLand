<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Land</title>
    <link rel="stylesheet" type="text/css" href="questions.css">
    <link rel="stylesheet" type="text/css" href="index_style.css">
    <link rel="stylesheet" type="text/css" href="instruction.css">
</head>
<body>
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
  
    <?php endif ?>
   
    <div class="container">
    <p class="head">Choose your path carefully, as it may lead to a dead end</p>
    
    <img class="doorpic" src="door.jpg" alt="">
    <img class="doorpic" src="door.jpg" alt="">
    <img class="doorpic" src="door.jpg" alt="">
    <br>
    <a href="Ques7.php" class="door">A</a>
    <a href="Ques4.php" class="door">B</a>
    <a href="Ques9.php" class="door">C</a>
    </div>
</body>
</html>