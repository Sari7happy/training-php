<!DOCTYPE html>
<html lang="ja">
<?php include('header.inc.php'); ?>

<body>
    <h1>書き込みました</h1>
     <!-- <p><?= $message ?></p>   -->



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
    <form action ='bbs.php' method="get">
        <button type ='submit'>戻る</button>
    </form>

    <?php include('footer.inc.php'); ?>
</body>

</html>