<?php
$number = rand(1,100);
// Write the output
// Notice the space after?
fwrite(STDOUT, "Guess a number?\n");

//Get the input from user
$user_guess= fgets(STDIN);


//evaluate
while ($user_guess != $number) { 
	if ($user_guess < $number) {
	fwrite(STDOUT, "Higher!\n");
	$user_guess = fgets(STDIN);
}
	elseif($user_guess > $number) {
	fwrite(STDOUT, "Lower! Try again\n");
	$user_guess = fgets(STDIN);
}
	else {
	fwrite(STDOUT, "WINNNN!\n");
}	
}

echo "You got it";

//set if statements
