<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
//basic celebrity class. each person has just a few traits
	class celebs {
		public $name;
		public $race;
		public $occupation;
		public $hairColor;
		public $gender;
		public $acc;

		function __construct($name, $race, $occupation, $hairColor, $gender,$acc){
			$this->name=$name;
			$this->race=$race;
			$this->occupation=$occupation;
			$this->hairColor=$hairColor;
			$this->gender=$gender;
			$this->acc=$acc;

		}

	}
	//this is the value taken from the user in the guess page

	//put all celebs in an array
	
	$person = $_SESSION['current'];
	$score = $_SESSION['score'];

	$input = $_POST['gender'];
	$d ="";
	$s=0;



	//simple comparison to test in the user guess is right
	if($input == $person->name){
		$d = "you guessed right!";
		$s = $score;


	}
	else{
		$d = "Sorry, you guessed wrong!";
	}
	//echo $will->gender;
?>
<body background="I5sQdc0.jpg">
<div>
<h1><?php echo $d; ?></h1>
<h2> Your score is : <?php echo $s; ?></h2>
<h1><a href="guesswhohomepage.php">Play Again?</h1>
</div>

</body>
</html>
<style type="text/css">
	div{
		text-align: center;
		margin: auto;
	}
</style>
<?php
session_destroy();
?>