<?php

// for繰り返し処理が決まっていたら、whileは繰り返すしょりが決まっていなかったら
for($i =0;$i <10;$i++){

    if($i === 5){
        // break;
    //    continue;
    //    continueはその値を飛ばす
        // breakはループ処理止める
    }
    echo $i;


}
$j=0;
while($j < 5 ){
    echo $j;
    $j++;
}

?>