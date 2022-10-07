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

?>