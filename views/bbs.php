<?php
    $message ='hellohello';
    // 以下がファイルを読み取る式
    $lines =file(__DIR__ .'/article.txt',FILE_IGNORE_NEW_LINES);
    require_once 'bbs.tpl.php';
