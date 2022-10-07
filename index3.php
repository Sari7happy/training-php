<?php
// /==一致、＝＝＝型も一致


$height = 91;

// if($height >= 91){
//     echo '身長は'.$height.'cmです。';
// }
    if($height !== 90){ 
        // ＝＝で方が同じかどうか
        echo '身長は90cmではありません。';
}
    

// データが入っているかどうか
$test ='11';
if(!empty($test)){
    echo '変数はからではありません';
}


// $signal ='yello';

// if($signal === 'red'){
//     echo '止まれ';
// }

// if($signal ==='yello'){
//     echo '一旦停止';
// }

// if($signal === 'blue'){
//     echo '進む';
// }  

// $speed = 90;

// if ($speed >='90'){
//     echo 'スピード違反';
// }

// if($speed <='80'){
//     echo '注意喚起';
// }


?>