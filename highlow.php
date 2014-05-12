<?php
// create a number 
if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
	echo "I have no idea what you're talking about buddy\n";
	die(1);
}
if ($argc < 3) {
	echo "Hey! I need your name to say hello to you!\n";
	exit(1);
}

define('MIN', $argv[1]);
define('MAX', $argv[2]);

$number = rand(MIN,MAX);
$guess = 1;
// Write the output
// Notice the space after?
// prompt user guess a number
fwrite(STDOUT, "Guess a number?\n");

//Get a guess from user
$user_guess= fgets(STDIN);


//check the number and the guess 
//if the guess is higher than number then tell the user "lower"
while ($user_guess != $number) 
// if the guess is lower than the number tell the user "higher"
{ 
	if ($user_guess < $number) 
	{
	fwrite(STDOUT, "Not even close! Higher!\n");
	}	
	elseif($user_guess > $number) 
	{
	fwrite(STDOUT, "Really? that was your guess? Lower! Try again\n");
	}
// if guess and the nuber are the same say "winner!" and end the game
// ad to the guess count 
	$user_guess = fgets(STDIN);
	$guess++;
// end the loop
}

echo " Finally! You got it in {$guess} tries\n";


//set if statements

//number of guesses
