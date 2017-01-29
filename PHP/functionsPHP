<?php
function one_out_of_two($str){
	$l = strlen($str);
	for($i=0; $i<=$l ; $i++ )
		if ($i%2 == 0 && $str[$i] != " ") $str[$i] = strtoupper($str[$i]);
	echo $str, PHP_EOL;
}
// test
one_out_of_two('hello world');



function is_isogram($str){
  $str = strtolower($str);
  for($i=0; $i < strlen($str) ; $i++){
    for($j=$i+1 ; $j < strlen($str);$j++)
      if($str[$i] == $str[$j]) return false;
  }
  return true;
}

//test
echo "Dermatoglyphics ".is_isogram('Dermatoglyphics'), PHP_EOL;
echo "aba ".is_isogram('aba'), PHP_EOL;
echo "moOse ".is_isogram('moOse'), PHP_EOL;
// must return only 1

?>
