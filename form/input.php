<?php
// 暗号化するコード
session_start();
// クリック乗っ取り防止コードdenyは拒否をする重ねて表示できないコード
header('X-FRAME-OPTIONS:DENY');

// if (!empty($_GET)) {
//     echo '<pre>';
//     var_dump( $_GET);
//     '</pre>';
// }
// // サニタイズ（消毒）,この関数で攻撃から守れる
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}



$pageFlag = 0;

if (!empty($_POST['btn_confirm'])) {
    $pageFlag = 1;
}
if (!empty($_POST['btn_submit'])) {
    $pageFlag = 2;
}

?>

<!DOCTYPE html>
<meta charset="UTF-8">

<head></head>

<body>


    <?php if ($pageFlag === 1) { ?>
        <form method="POST" action="input.php">
            氏名
            <?php echo h($_POST['your_name']); ?>

            <br>
            メールアドレス
            <?php echo h($_POST['email']); ?>
            <br>
        
            <input type="submit" name="back" value="戻る">
            <input type="submit" name="btn_submit" value="送信する">
            <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>" >
            <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
        </form>
        <?php } ?>

        <?php if ($pageFlag === 2) { ?>
            送信が完了しました！
        <?php } ?>












        <?php if ($pageFlag === 0) { ?>
            <!-- 安全なフォームになる -->
            <?php
            // 暗号化のコードなかったら
            if(!isset($_SESSION['csrfToken'])){
            $csrfToken = bin2hex(random_bytes(32));
            $_SESSION['csrfToken'] =$csrfToken;
            }
            $token =$_SESSION['csrfToken'];
            ?>

            <form method="POST" action="input.php">
                氏名
                <input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo h($_POST['your_name']); }?>" >
                <br>
                メールアドレス
                <input type="email" name="email" value ="<?php if(!empty($_POST['email'])){echo h($_POST['email']); }?>" >
                <br>
                ホームページ
            性別
            年齢
            お問い合わせ内容
            注意事項のチェック


                <input type="submit" name="btn_confirm" value="確認する">
                <input type ="hidden" name ="csrf" value="<?php echo $token ?>"
            </form>
        <?php } ?>


</body>

</html>