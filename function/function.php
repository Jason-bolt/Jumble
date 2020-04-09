<?php

function random_word(){
	global $connection;
	
	$query = "SELECT word FROM words";
	$query .= " ORDER BY RAND()";
	$query .= " LIMIT 1";
	$words = mysqli_query($connection, $query);
	if ($word = mysqli_fetch_assoc($words)) {
		return $word;
	}else{
		return null;
	}
}

function redirect_to($destination){
	header("Location: " . $destination);
}

?>