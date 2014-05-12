<?php
// create a number 
$number = rand(1,100);
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
