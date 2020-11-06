<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Random Number</title>
</head>
<body>

<?php

/*
 echo "<p>Generating a random number between 1 and 10: <br/>";
 ~~~~~~~~lucky dice game~~~~~~~~~~~
	for($count = 0; $count <= 10 ; $count++){
		$roll1 = rand(1,6);
		$roll2 = rand(1,6);
		echo rand(1, 10);
		echo '<br/>';
		echo 'rand(1, 10)';
		echo '<br/>';
		if (1 == 1){
			echo '1 is equal to 1';
		}
		$x = 2;
		echo '<br/>';
		echo strval($x);
		echo "<br/>";
		echo '<p>You rolled a ' . $roll1 . " and a " . $roll2 . "</p>";
		if($roll1 == 6 && $roll2 == 6){
			echo '<br/><p>You rolled a ' . $roll1 . " and a " . $roll2 . ' you win!</p>'; // this line is only printed if they roll a 6
		}else{
			echo '<br/><p>sorry player you didn\'t win!, better luck next time!</p>';
		}
		echo '<br/><p>Thanks for playing!</p>' ;
	}

	do {
		$roll = rand(1, 6);
		echo '<p>You rolled a '. $roll . '</p>';
		if ($roll == 6){
			echo '<p>You win</p>';
		}else{
			echo '<p>Sorry you didn\'t win, better luck next time!</p>';
		}
	}while($roll != 6);


	$myArray = ['one', 2, 3];
	echo $myArray[0];
	echo $myArray[1];
	echo $myArray[2];

	$myArray[1] = 'two';
	$myArray[2] = 'three';

	echo $myArray[1];
	echo $myArray[2];

	$myArray[] = 'four';

	echo $myArray[3];
	
	$roll = rand(1, 6);

	if($roll == 1){
		$english = 'one';
	}elseif($roll == 2){
		$english = 'two';
	}elseif($roll == 3){
		$english = 'three';
	}elseif($roll == 4){
		$english = 'four';
	}elseif($roll == 5){
		$english = 'five';
	}elseif($roll == 6){
		$english = 'six';
	}

	
	echo '<p>You rolled a '. $english . '.</p>';

	if ($roll == 6 ){
		echo '<p>Congratulation\'s you win!</p>';

	}else{
		echo '<p>Sorry you didn\'t win better luck next time!</p>';
	}

	
	$english = [
		1 => 'one',
		2 => 'two',
		3 => 'three',
		4 => 'four', 
		5 => 'five',
		6 => 'six'
	];


	$roll1 = rand(1, 6);
	$roll2 = rand(1, 6);

	echo '<p>You rolled a ' . $english[$roll1] . ' and a ' . $english[$roll2].'</p>';

	if ($roll1 == 6 && $roll2 == 6){
		echo '<p>You win!</p>';
	}else{
		echo '<p>Sorry better luck next time!</p>';
	}

	~~~~~~~~lucky dice game end~~~~~~~~~~
*/


	$birthdays = [
		'Kevin' => '1978-04-12',
		'Stephanie' => '1980-05-16',
		'David' => '1983-09-09',
	];

	echo '<p>Kevin\'s birthday is ' . $birthdays['Kevin'] . '!</p>';

?>

</p>


</body>
</html>