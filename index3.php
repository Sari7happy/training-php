<?php
// /==一致、＝＝＝型も一致


$height = 90;

if($height >= 91){
    echo '身長は'.$height.'cmです。';
}
    if($height <= 90){
        echo '身長は'.$height.'cmなります。';
}
    


$signal ='blue';

if($signal === 'red'){
    echo '止まれ';
}else if($signal ==='yello'){
    echo '一旦停止';

    echo '<br>';

}else{
    echo '進む';
}
$speed = 80;

if ($signal ==='blue'){
    if($speed >=90){
        echo 'スピード違反';
    }
}

?>