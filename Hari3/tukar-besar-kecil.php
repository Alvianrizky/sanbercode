<?php 

// ctype_upper();

// strtolower() //huruf kecil
// strtoupper() //huruf besar

// $string = 'Hello World';

// $arr = str_split($string);
// $count = count($arr);

// for($i = 0; $i <= $count - 1; $i++)
// {
// 	if(ctype_upper($arr[$i]))
// 	{
// 		$arr[$i] = strtolower($arr[$i]);
// 	} else {
// 		$arr[$i] = strtoupper($arr[$i]);
// 	}
// }

// $data = implode("", $arr);
// print_r($data);

function tukar_besar_kecil($string)
{
	$arr = str_split($string);
	$count = count($arr);

	for($i = 0; $i <= $count - 1; $i++)
	{
		if(ctype_upper($arr[$i]))
		{
			$arr[$i] = strtolower($arr[$i]);
		} else {
			$arr[$i] = strtoupper($arr[$i]);
		}
	}

	$data = implode("", $arr);
	print_r($data);
	echo "<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>