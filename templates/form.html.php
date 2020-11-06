<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Random Number</title>
	<style>
		form{
			margin: 0 auto;
			background-color: white;
			margin-top: 30px;
			padding: 10px;
			

		}
		body{
			background-color: brown;
			height: 100vh;
			text-align: center;
			display: flex;
			flex-flow: column;

			
		}
		form input{
			margin-bottom: 20px

		}

		#sub-button{
			
			width: 100px;
			height: 30px;
			border-width: 0;
			background-color: grey;
			color: white;
		}
		#sub-button:hover{ 
			background-color: black;
		}
	</style>
</head>
<body>
	
	<form action='' method='post'>
		<h1>Sample Form Test PHP</h1>
		<label style="" for="firstname">First name:</label>
		<input type="text" name="firstname" id="firstname"><br/>
		<label for="lastname">Last name:</label>
		<input type="text" name="lastname" id="lastname"><br/>
		<input type="submit" value="GO" id="sub-button"></br>
		<small style="float: right">Created by Jayden Vause.</small>
	</form>


</body>
</html>