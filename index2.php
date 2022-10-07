<?php




// // []で繋げれる,複数の連想配列
// $array_member_2 = [
//     '本田' =>[
//         'height' =>170,
//         'hobby' =>'soccer',
//         'subject' =>'数学'
//     ],
//     '香川' =>[
//         'height' =>179,
//         'hobby' =>'テニス',
//         'subject' =>'国語'
//         ]
// ];
$array_member_4 = [
    
    'takahashi' =>[

        'お姉ちゃん'=>[
        'hobby' =>'tiktok',
        'like season' =>'冬'
        ],
        

        'お母さん'=>[
        'hobby' =>'cooking',
        'like season' =>'夏'
        ]
        ],
];

echo $array_member_4['takahashi']['お母さん']['like season'];
