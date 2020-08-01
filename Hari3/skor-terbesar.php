<?php 

function skor_terbesar($arr){
	$data = [];
	$nilai1 = 0;
	$nilai2 = 0;
	$nilai3 = 0;
	foreach($arr as $key => $value)
	{
		if($value['nilai'] > $nilai1 and $value['kelas'] == 'Laravel') {
			$nilai1 = $value['nilai'];
		} elseif ($value['nilai'] > $nilai2 and $value['kelas'] == 'React Native') {
			$nilai2 = $value['nilai'];
		} elseif ($value['nilai'] > $nilai3 and $value['kelas'] == 'React JS') {
			$nilai3 = $value['nilai'];
		} else {
			continue;
		}

		$data[$value['kelas']] = 
		[
			'nama' => $value['nama'],
			'kelas' => $value['kelas'],
			'nilai' => $value['nilai']
		];
	}
	echo "<pre>";
	return $data;
}

// TEST CASES
$skor = [
	[
		"nama" => "Bobby",
		"kelas" => "Laravel",
		"nilai" => 78
	],
	[
		"nama" => "Regi",
		"kelas" => "React Native",
		"nilai" => 86
	],
	[
		"nama" => "Aghnat",
		"kelas" => "Laravel",
		"nilai" => 90
	],
	[
		"nama" => "Indra",
		"kelas" => "React JS",
		"nilai" => 85
	],
	[
		"nama" => "Yoga",
		"kelas" => "React Native",
		"nilai" => 77
	],
];

print_r(skor_terbesar($skor));

?>