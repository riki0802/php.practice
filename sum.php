
<?php
function sum($max){
 $result = 2;
  for($i = 1; $i <= $max; $i++){
  $result *= $i;
    }
   return $result;
}
echo sum(20) .PHP_EOL;

function add($a, $b){
    $result = $a + $b;
return $result;
}
echo add(1,2) .PHP_EOL;

function a($arr) {
  $result = 1;
  foreach($arr as $value){
    $result *= $value;
  }
  return $result;
}
echo a(array(1, 3, 5, 7, 9)) .PHP_EOL;
?>