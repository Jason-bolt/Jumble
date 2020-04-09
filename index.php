<?php
	session_start();
	require('db/db.php');
	include('function/function.php');

	$WORD = random_word();

	$_SESSION['current_word'] = $WORD['word'];

	$_SESSION['shuffled_word'] = str_shuffle($WORD['word']);

	$_SESSION['answer'] = '';

	redirect_to('game.php');
	

?>