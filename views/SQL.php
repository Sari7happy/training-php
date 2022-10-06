<?php
// データベースを繋ぐときのコード,passワード入れてdbname先を指定すると表示される
    $pdo =new PDO('mysql:host=localhost;dbname=paiza;charset=utf8','root','root');

    $sql ='SELECT * FROM players';
    $statement =$pdo ->prepare($sql);
    $statement ->execute();

    while ($row =$statement ->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
        echo('<br>');
    }
    $statement = null;
    $pdo =null;
