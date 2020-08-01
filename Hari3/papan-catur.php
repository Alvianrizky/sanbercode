<?php 

function papan_catur($angka) 
{
  for($i = 1; $i <= $angka; $i++)
  {

    if($i%2 == 0)
    {
      echo "";
      for($j = 1; $j <= $angka-1; $j++)
      {
        echo "&nbsp;#";
      }
    } else {
      for($j = 1; $j <= $angka; $j++)
      {
        echo "#&nbsp;";
      }
    }
    echo "<br>";
  }
}

// TEST CASES
echo papan_catur(4); 
echo "<br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
echo "<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
 */

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/


?>