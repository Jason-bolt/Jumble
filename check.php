<?php

	session_start();
	require('db/db.php');
	include('function/function.php');

	if (!isset($_GET['submit'])) {
		redirect_to('game.php');
	}else{

		$user_word = $_GET['userWord'];

		$word = $_SESSION['current_word'];

		if ($user_word == $word) {
			$_SESSION['answer'] = 'correct';

			redirect_to('game.php');
		}else {
			$_SESSION['answer'] = 'wrong';

			$_SESSION['wrong_word'] = $user_word;

			redirect_to('game.php');
		}

	}

?>