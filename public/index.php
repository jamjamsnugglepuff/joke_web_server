<?php
/*
	if (!isset($_POST['firstname'])) {
		include __DIR__ . '/../templates/form.html.php';
	}else {
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];
		if ($firstName == 'Kevin' && $lastName == 'Yank') {
			
			$output = 'Welcome, oh glorious leader!';
			} else {
			$output = 'Welcome to our website, ' .
			htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
			htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
		}
		include __DIR__ . '/../templates/welcome.html.php';
	}
*/
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=internet_joke_database;charset=utf8', 'ijdbuser', 'mypassword');
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$output = 'Database connection established.';
/*
		$sql = 'CREATE TABLE joke(
			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			joketext TEXT,
			jokedate DATE NOT NULL
		) DEFAULT CHARACTER SET utf8 ENGINE=innoDB';
*/
		$sql = 'SELECT `joketext` FROM `joke` ';

		$result = $pdo->query($sql);
		while($row = $result->fetch()){
			$jokes[] = $row['joketext'];
		}



		// $output = 'Joke table was successfully created!';
	}catch(PDOException $e){
		$output = 'Database error: ' .
		$e->getMessage() . ' in ' .
		$e->getFile() . ':' . $e->getLine();
	}

	include __DIR__ . '/../templates/jokes.html.php';