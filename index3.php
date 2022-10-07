<?php

// 複数の値をあつかうとき

$members = [
    'name' => '本田',
    'height' =>170,
    'hobby' => 'soccer'
];
// as変数の単数形にする
// foreach($members as $member){
//     echo $member;


// キーとバリューを表示
foreach($members as $key =>$value) {
    echo $key .'は'.$value. 'です。';
}




?>