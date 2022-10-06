<?php
// データベースを繋ぐときのコード,passワード入れてdbname先を指定すると表示される
    $pdo =new PDO('mysql:host=localhost;dbname=paiza;charset=utf8','root','root');
// SQL文を書いてデータを取り出す*は全てなのでそこの値を変えてみる、WHEREの後にどこから取り出すか書く
    $sql ='SELECT * FROM players WHERE level >= 7';
    $statement =$pdo ->prepare($sql);
    $statement ->execute();

    $results =[];
    while ($row =$statement ->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }
    $statement = null;
    $pdo =null;


    $message ='hello world';
    require_once 'content.tpl.php';