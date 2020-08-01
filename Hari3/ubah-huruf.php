<?php 

function ubah_huruf($string)
{
	$ubah = ['w'=>'x', 'o'=>'p', 'd'=>'e', 'e' => 'f', 'v' => 'w', 'l' => 'm', 'a' => 'b', 'r' => 's', 'k' => 'l', 'n' => 'o', 's' => 't', 'm' => 'n', 'g' => 'h', 't' => 'u', 'p' => 'q'];
	$arr = str_split($string);

	$count = count($arr);

	for($i = 0; $i <= $count - 1; $i++)
	{
		$jum = count($ubah);

		for($j = 0; $j <= $jum - 1; $j++)
		{
			if(array_key_exists($arr[$i], $ubah))
			{
				$arr[$i] = $ubah[$arr[$i]];
				break;
			}
		}
	}

	$data = implode("", $arr);
	print_r($data);
	echo "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>