<?php
$number = rand(1,100);
$guess = 0;
// Write the output
// Notice the space after?
fwrite(STDOUT, "Guess a number?\n");

//Get the input from user
$user_guess= fgets(STDIN);


//evaluate
while ($user_guess != $number) 
{ 
	if ($user_guess < $number) 
{
	fwrite(STDOUT, "Higher!\n");
}
	elseif($user_guess > $number) 
{
	fwrite(STDOUT, "Lower! Try again\n");
}
	else 
{
	fwrite(STDOUT, "WINNNN!\n");
}	
	$user_guess = fgets(STDIN);
	$guess++;
}

echo " Good guess! You got it in {$guess} tries\n";


//set if statements

//number of guesses
