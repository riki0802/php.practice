<?php
$name = "riki";
if($name === "riki"){
    echo "あなたは私の名前です" .PHP_EOL; 
}else {
    echo "あなたの名前ではありません" .PHP_EOL;
}

$total = 0;
for($i = 0; $i <=10000; $i++){
    $total += $i;
}
echo $total .PHP_EOL;

$fruits = array("apple","orange","lemon","grape","banana");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}
