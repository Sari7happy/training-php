<?php

// 配列は横一列に1,2,3で表す
// 配列はarrayという意味で[]で表す,0から始まるので0は１になる
// 配列１行version
$array_1 =['あああ',2,3];

// 配列2,3行version
$array_2 = [
    ['あか','あお','きいろ'],
    ['みどり','むらさき','くろ']
];

echo '<pre>';
var_dump($array_2);
echo '</pre>';
// var_dumpで変数全て表示されるecho '<pre>'で縦表示

// array[][];でその文字を指定
echo $array_2[0][1];



?>