<?php 

function tentukan_deret_geometri($arr) 
{
	$count = count($arr);

	for($i = $count - 1; $i >= 1; $i--)
	{
		$nilai[] = $arr[$i]/$arr[$i-1];
	}

	$jum = count($nilai);

	for($i = 0; $i <= $jum; $i++)
	{
		if(!is_float($nilai[$i]))
		{
			echo "true";
			break;
		} else {
			echo "false";
			break;
		}
	}
	echo "<br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false


?>