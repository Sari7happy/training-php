<?php
// インプット引数なしアウトプット引数なし
function test (){
    echo 'テスト';
}

test();


$comment ='コメント2';
$comment3 ='コメント3';
// インプット引数ありアウトプット引数なし
function getComment($string){
    echo $string;
}
getComment($comment3);


// インプット引数なしアウトプット引数あり

function getNumberOfComment(){
    return 5;
}
  echo getNumberOfComment();

// 引数2つ,戻り値あり
function sumPrice($int1,$int2){
    $int3 = $int1 + $int2;
    return $int3;
}
$total = sumPrice(3,5);
echo $total;

?>