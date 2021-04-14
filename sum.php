
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

//strip_tags 文字列に含まれるHTMLタグやPHPタグを取り除く取り除きたくないHTMLを指定することもできる HTMLのコメントアウト、PHPタグは取り除かない指定はできない
//例
$a = "<h1>テスト</h1>";
echo strip_tags($a) .PHP_EOL;

// array_push 配列の最後に1つ以上の要素を追加したい時に使用する関数で、プログラム途中で要素数が可変する際などに使用される。
//例
$members=array("一","二","三");
            array_push($members,"四","五");
           print_r($members);

//array_merge 配列の要素の最後にひとつまたは複数の配列を結合する
//例
$array1 = [1,2,3];
$array2 = [4,5,6];
$array3 = [7,8,9];

$array = array_merge($array1,$array2,$array3);
print_r($array).PHP_EOL;

//time, mktime PHPの標準関数で指定した日時のタイムスタンプを取得するためのメソッド
//例
$today = mktime(9,00,00,4,14,2021);
print date("Y年m月d日",$today).PHP_EOL;

//date 現時点の時刻を取得する
//例
echo date('Y年m月d日 H時i分s秒');
          
            
            



?>