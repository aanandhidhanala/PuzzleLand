<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Land</title>
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
    <h1 >About Puzzle Land</h1>
    <p class="para">Welcome to our website! We are proud to offer a variety of fun and challenging puzzles that will help keep your brain sharp and engaged. Whether you are a puzzle enthusiast or just looking for a fun way to pass the time, we have something for everyone. Our puzzles are designed to be both enjoyable and mentally stimulating, so you can have fun while also improving your cognitive abilities. And don't worry if you reach a dead end – our puzzles are designed to be restarted, so you can keep working on them until you solve them. So take a break from your daily routine and try out some of our exciting puzzles. We're sure you'll find them both entertaining and beneficial for your mental well-being.</p>
</body>
</html>