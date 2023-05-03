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
    <h1 >Instructions</h1>
    <ul class="instruct">
        <li class="ins">To begin solving the puzzle, navigate to the home page and click on the "Start" button.</li>
        <li class="ins">As you encounter each question, take the time to read through it thoroughly to ensure you understand what is being asked.</li>
        <li class="ins">When you are confident in your answer, carefully enter it into the provided input field.</li>
        <li class="ins">Once you have entered your answer, use the "Submit" button to move on to the next step of the puzzle.</li>
    </ul>
</body>
</html>