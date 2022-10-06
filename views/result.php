<?php
    $messsage ='This is saru';

    $article  =htmlspecialchars($_REQUEST['article']);
    $name =htmlspecialchars($_REQUEST['name']);
// PHP_EOLは行の末尾を指定改行コード
    $line =$article .','.$name .PHP_EOL;
    // file_put_contentsはファイルに書き込むコード、FILE_APPENDはデータを追記するコード、LOCK_EX自分が書き込むときはファイルをロックする
    file_put_contents(__DIR__.'/article.txt',$line,FILE_APPEND | LOCK_EX);
    require_once 'result.tpl.php';