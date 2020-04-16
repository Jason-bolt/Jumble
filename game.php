<?php
	session_start();
	require('db/db.php');
    include('function/function.php');
	
    $shuffled_word = $_SESSION['shuffled_word'];

	// if (!isset($shuffled_word)) {
	// 	redirect_to('index.php');
	// }
	include('includes/header.php');

	$answer = $_SESSION['answer'];

?>

		<?php
			if (isset($answer) && $answer == 'correct') {
		?>
			<h1 class="text-center col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin: 20px; color: #11E811; border: 4px solid #11E811; width: 220px; text-shadow: 2px 2px #0D6E0D; box-shadow: 2px 2px #0D6E0D;">CORRECT</h1>
		<?php
			}elseif(isset($answer) && $answer == 'wrong'){
		?>
			<h1 class="text-center col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin: 20px; color: #F91620; border: 4px solid #F91620; width: 220px; text-shadow: 2px 2px #A11E23; box-shadow: 2px 2px #A11E23;">WRONG</h1>
		<?php
			}
		?>

      	<h1 class="text-center" style="margin: 0; margin-top: 20px;">Rearrange the word correctly.</h1>


  <div class="row">
      
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <p class="card-title text-center" style="font-size: 70px; margin-bottom: 0;"><?php echo $shuffled_word; ?></p>
            <form class="form-signin text-center" action="check.php" method="GET">
              <div class="form-p-group">

              	<?php
              	// CORRECT ANSWER
              		if (isset($answer) && $answer == "correct") {
              	?>
					<p style="color: #11E811; font-size: 20px;"><?php echo $_SESSION['current_word']; ?></p>

					</div>
					<a href="index.php" class="btn btn-primary text-center" style="width: 100px; margin-top: 10px">Next</a>
              	<?php
              	// WRONG ANSWER
              		}elseif(isset($answer) && $answer == "wrong"){
              	?>
              		<p style="color: #F91620; margin: 0 auto;"><?php echo $_SESSION['wrong_word']; ?></p>

              		<br />

              		<p style="color: #11E811; font-size: 20px; margin: 0 auto 5px auto;"><?php echo $_SESSION['current_word']; ?></p>

					</div>
					<a href="index.php" class="btn btn-primary text-center" style="width: 100px; margin-top: 10px">Next</a>
              	<?php
              	// NO ANSWER
              		}else{
              	?>
              		<input type="text" name="userWord" class="form-control" placeholder="Correct word" required autofocus>

					</div>
					<input type="submit" class="btn btn-primary text-center" name="submit" value="Check" style="width: 100px; margin-top: 10px">
              	<?php
              		}
              	?>
               
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
