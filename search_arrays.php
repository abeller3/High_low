<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

Function TrueFalse($name,$compare)
{
	if (array_search($name, $compare) !== FALSE) 
	{ 
		return True;
	} 
	else 
	{
		return False;
	}

}

Function ArrayCompare($array1, $array2)
{
	$count= 0;

	foreach($array1 as $value)
	{
		if (TrueFalse($value,$array2))
		{
			$count++;
		}
	}
	return $count;
}
Var_dump(TrueFalse(Amanda,Amanda));
var_dump(ArrayCompare($names,$compare));


