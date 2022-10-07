<?php
// 文字列のながさ
$text ='あいうえお';

// echo strlen($text);

echo mb_strlen($text);

// 文字列を置換する機能
$str = '文字列を田中します';
echo str_replace('田中','たなか',$str);


?>