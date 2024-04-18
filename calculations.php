<?php
  $guess = $_POST['guess'];
  $computerguess = rand(1,10);
?>
<h3>Result:</h3>

The computers guess was <?php echo $computerguess ?>
<br>
Your guess was <?php echo $guess ?>
<?php 
  if ($guess==$computerguess){
    echo "<br>You win!";
  } else{
    echo "<br>You lose!";
  }
?>