<?php 

$x = 102339;



function pasangan_terbesar($angka)
{
	$array = str_split($angka);
	$count = count($array) - 1;

	$max = max($array);
	$search = array_search($max,$array);

	$left = $search == 0 ? 0 : $array[$search-1].$array[$search];
	$right = $search == $count ? 0 : $array[$search].$array[$search+1];

	if($left > $right)
	{
		echo $left;
	} else {
		echo $right;
	}
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>";
echo pasangan_terbesar(12783456); // 83
echo "<br>";
echo pasangan_terbesar(910233); // 91
echo "<br>";
echo pasangan_terbesar(71856421); // 85
echo "<br>";
echo pasangan_terbesar(79918293); // 99

?>