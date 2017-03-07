<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="I5sQdc0.jpg">

<?php
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
$accessoriesGuess = $_POST['accessories'];

$person = $_SESSION['current'];
$a = "";

if($accessoriesGuess == $person->acc){
	$a = "Yes!";
}
else {
	$a = "Nope!";
}

?>

<h1 style="text-align: center;"><?php echo $a ?></h1>
<a href="guesswho.html" class="button"  style="text-align: center;">Back to guessing</a>


</body>
</html>
