<?php

function cek($string)
{
    $str = '';
    $count = strlen($string);
    for($i = $count; $i >= 0; $i--)
    {
        $str .= substr($string, $i, 1);
    }

    if($string == $str)
    {
        return "true";
    } else {
        return "false";
    }
}

function palindrome_angka($integer) {
    if ($integer < 9) {
        $integer = $integer + 1;
        return $integer;
    }

    while(cek($integer) == 'false')
    {
        $integer++;
    }

    return $integer;
}

// // TEST CASES
echo palindrome_angka(8); // 9
echo "<br>";
echo palindrome_angka(10); // 11
echo "<br>";
echo palindrome_angka(117); // 121
echo "<br>";
echo palindrome_angka(175); // 181
echo "<br>";
echo palindrome_angka(1000); // 1001

?>