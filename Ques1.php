<?php 
    if(isset($_POST['answer1']))
    {
        $answer1=$_POST['answer1'];
        if($answer1 == '212132')
        {
            header('Location: Ques2.php');
            exit;
        }
        else{
            echo " <p> Oops! That's not right. Keep trying!</p>";
        }
    }
?>
<?php
      if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
        echo "<p class='error'>{$_SESSION['error']}</p>";
        unset($_SESSION['error']);
      } elseif (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
        echo "<p class='success'>{$_SESSION['success']}</p>";
        unset($_SESSION['success']);
      }
    ?>
<?php include('server.php') ?>
<?php include('errors.php'); ?>

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
  <?php if (isset($_SESSION['username'])) : ?>
    <nav class="navbar">
      <div class="logo">PuzzleLand</div>
      <ul class="nav-links">
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
    <p class="head">Welcome! Start solving the question
        <br>
        Spot the differences between the two pictures and count the number of differences in each box. If a difference is spotted in both boxes, count it twice. Your final answer should be the number of differencess in each box, starting from 1 and ending at 6.
    </p>
    <img src="spotdiff.png" alt="">
    <form class="s2" method='POST'>
      <label>Answer</label>
      <input type="text" name="answer1">
      <input type="submit" name="submit1" value="Submit">
    </form>
    
  </div>
</body>
