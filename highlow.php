<?php

if (!is_numeric($argv[1]) || !is_numeric($argv[2])) 
{
	echo "I have no idea what you're talking about buddy\n";
	die(1);
}

if ($argc < 3) 
{
	echo "Hey! I need your name to say hello to you!\n";
	exit(1);
}

define('MIN', $argv[1]);
define('MAX', $argv[2]);

$number = mt_rand(MIN,MAX);
$guess = 1;

// prompt user guess a number
fwrite(STDOUT, "Guess a number?\n");

//Get a guess from user
$user_guess= fgets(STDIN);

//check the number and the guess 
while ($user_guess != $number) 
{ 
	if ($user_guess < $number) 
	{
	// if the guess is lower than the number tell the user "higher"
	fwrite(STDOUT, "Higher\n");
	}	
	elseif($user_guess > $number) 
	{
	//if the guess is higher than number then tell the user "lower"
	fwrite(STDOUT, "Really? that was your guess? Lower! Try again\n");
	}

	$user_guess = fgets(STDIN);
	$guess++;
}
// if guess and the nuber are the same say "winner!" and end the game
// ad to the guess count 
echo " WINNER! You got it in {$guess} tries\n";

