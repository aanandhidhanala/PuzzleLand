<?php include('server.php') ?>
<?php
if(isset($_POST['answer1']))
        {
            $answer1=$_POST['answer1'];
            if($answer1 == '25')
            {
                header('Location: deadend.php');
                exit;
            }
            else{
                echo " <p> Oops! That's not right. Keep trying!</p>";
            }
        }
        
        ?>
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
    <?php include('errors.php'); ?>
    
        
    <div class="container">
    <p class="head">What is the total number of apples that Krish has after he was given 5 more apples, if initially he had 5+3(5+2)%2???
    </p>
    
    <form class="s2" method='POST'>
  	  <label>Answer</label>
  	  <input type="text" name="answer1"  >
        <input type="submit" name="submit1" value="Submit">
  	</form>
    </div>
</body>
</html>