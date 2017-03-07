<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>GuessWho</title>
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
	

	//these are three celebrities made
	$will = new celebs("willsmith","AfricanAmerican","Actor", "black", "Male","tie");
	$future = new celebs("Future","AfricanAmerican","Artist", "blonde", "Male", "American");
	$maggie = new celebs("Maggieq","Caucasian","Actor", "brown", "Female", "none");
	$jennifer = new celebs("JenniferLawrence","Caucasian","Actor", "blonde", "Female", "none");
	$bron = new celebs("LebronJames","AfricanAmerican","Athlete", "black", "Male", "Basketball");
	$john = new celebs("JackieChan","Asian","Actor", "brown", "Male", "none");


	//put all celebs in an array
	$celebrities = array($will, $future, $maggie, $jennifer, $bron, $john);

	//random number to pick a random celeb
	$random = rand(0,4);
	$currentCeleb = $celebrities[$random];
	
	$_SESSION['current'] = $currentCeleb;
	$_SESSION['score'] =  30;

	//echo $will->gender;
?>
<body>
<h1 id="homepage">Wanna play "Guess Who?" </h1>
<h1 id="homepage"><a href="guesswho.html"> Let's Play</a></h1>
<div class = "instructions">
<ul>
<li> First, The code will randomly select a celebrity from the given images.</li>
<li> You should try and guess the celebrity the code selects.</li>
<li> You can earn 30 points if you guess correctly without using any clues.</li> 
<li> You may pick a category to gain a clue.</li>
<li> You will loose 5 points every time you use a clue.</li>
<li> You may guess the celebrity anytime wish to my clicking "GUESS WHO?" </li>
<li> Click "Let's Play" to play the game.</li> 
</ul>
<h1><center> How to play? </center></h1>
</div>
<br>

<center> <img src= "play.gif"> </center>

<style type="text/css">

html{
	background-image:url("https://i.ytimg.com/vi/Z6po6SS9Uz4/maxresdefault.jpg");
	background-size: cover;
	background-attachment: fixed;
}
#homepage{
	color:rgb(220,20,60);
	text-align: center;
font-family: serif;
	font-size:50px;

}
#homepage1{
	text-align: center;
	font-style: italic;
	font-size:35px;
  	color:rgb(0,191,255);
	text-decoration:none;
}

.instructions{
        margin-right:auto;
        margin-left: auto;
        height: 340px;
        width: 35%;
        background-color:rgba(255,255,255,0.7);
	<!--rgba(255,228,225,0.6);-->
        color: black;
        padding: 25px;
        font-size:120%;
}

a.hover{
        color:green;
	font-weight:900;
}

a.link{
	text-decoration:none;
}



#homepage{
	text-align: center;
	font-family: serif;
	font-style: oblique;
	font-size:70px;

}
#homepage1{
	text-align: center;
	font-size:50px;

}
</style>
</body>
</html>