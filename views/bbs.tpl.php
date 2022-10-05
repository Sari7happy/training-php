<!DOCTYPE html>
<html lang="ja">
<?php include('header.inc.php'); ?>

<body>
    <h1>1行掲示板</h1>
    <!-- <p><?= $message ?></p>  -->

    <form action='result.php' method="post">
        <label for='article'>投稿</label>
        <input type='text' name='article'>
        <p></p>
        <label for='neme'>名前</label>
        <input type='text' name='name'>
        <button type='submit'>送信する</button>

    </form>

    <p>
        <!-- issetは引数が存在しているか見極める関数 -->
        <?php
        if (isset($article)) {
            echo $article . ',';
        }
        if (isset($name)) {
            echo $name;
        }
        ?>
    </p>
    <h2>投稿一覧</h2>
    <?php foreach ($lines as $line) { ?>
        <p><?= $line ?></p>

    <?php } ?>


    <?php include('footer.inc.php'); ?>
</body>

</html>