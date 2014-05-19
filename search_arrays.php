<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];




// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().


Function TrueFalse($name,$compare)
{
	if (array_search($name, $compare) !== FALSE) { 
		return True;
	} else {
		return False;
	}

}

Function ArrayCompare($array1, $array2)
{
	$count= 0;
	// foreach loop
	foreach($array1 as $value) {
		if (TrueFalse($value,$array2)){
			$count++;
		}
	}
	return $count;
}


var_dump(ArrayCompare($names,$compare));


