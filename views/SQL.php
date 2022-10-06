<?php
// データベースを繋ぐときのコード,passワード入れてdbname先を指定すると表示される
$pdo = new PDO('mysql:host=localhost;dbname=paiza;charset=utf8', 'root', 'root');
// SQL文を書いてデータを取り出す*は全てなのでそこの値を変えてみる、WHEREの後にどこから取り出すか書く


// 2つのテーブルを結合
$sql = 'SELECT * FROM players LEFT JOIN jobs ON jobs.id = players.job_id';
$statement = $pdo->prepare($sql);
// レベル5以上を映し出すコード
$statement->execute();


$results = [];
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $results[] = $row;
}
$statement = null;
$pdo = null;


$message = 'hello world';
require_once 'content.tpl.php';
