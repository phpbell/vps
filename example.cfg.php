<?php
$cfg=[
    'db'=>[
        'database_type' => 'sqlite',
        'database_file' => __DIR__.'/db/db.sqlite3'
    ],
    'moedas'=>[
        // https://bot.tinyter.com/
        'dolar'=>5.62,//16mar2021
        'euro'=>6.70,//16mar2021
        'libra'=>'7.73',//16mar2021
        'rublo'=>0.08//16mar2021
    ],
    'root'=>__DIR__,
    'showErrors'=>true,
    'url'=>'http://public.local',
    'localhost'=>'http://localhost/vps'
];
require __DIR__.'/vendor/autoload.php';
return new Bell\Bell($cfg);
?>
