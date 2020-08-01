<?php 

// $array = [1, 2, 3, 4, 5];

// $count = count($array);

// $jumlah = array_sum($array);


// $mean = $jumlah/$count;


// echo $mean;

function cari_mean($arr)
{
	$count = count($arr);

	$jumlah = array_sum($arr);


	$mean = $jumlah/$count;


	echo round($mean);
	echo "<br>";
}

// TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7


?>