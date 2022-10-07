<?php
    // 変数は後から付け足した方を表示、intは数字、stringは文字静的型付はjavaなど
    $test_1=123;
    $test_2='テストです';
// 連結はピリオドで繋ぐ場合は文字として扱われる
    $test_3 = $test_1. $test_2;
    // $_test =456;
    // 英文字か_が先頭
    // $test ='テストです';
    var_dump($test_3);
    //動的を調べるにはvar_dump();で調べる

    // echo $test;
?>