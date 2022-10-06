<?php
// データベースを繋ぐときのコード,passワード入れてdbname先を指定すると表示される
    $pdo =new PDO('mysql:host=localhost;dbname=paiza;charset=utf8','root','root');
// SQL文を書いてデータを取り出す*は全てなのでそこの値を変えてみる、WHEREの後にどこから取り出すか書く
    $sql ='SELECT * FROM players WHERE level >= :lower';
    $statement =$pdo ->prepare($sql);
    // レベル5以上を映し出すコード
    $low_value =3;
    $statement ->bindValue(':lower', $low_value, PDO::PARAM_INT);
    $statement ->execute();

    $results =[];
    while ($row =$statement ->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }
    $statement = null;
    $pdo =null;


    $message ='hello world';
    require_once 'content.tpl.php';