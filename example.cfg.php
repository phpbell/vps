<?php
$cfg=[
    'db'=>[
        'database_type' => 'sqlite',
        'database_file' => __DIR__.'/db/db.sqlite3'
    ],
    'moedas'=>[
        // https://bot.tinyter.com/
        'dolar'=>5.10,//16mar2021
        'euro'=>5.58,//16mar2021
        'rublo'=>0.06//16mar2021
    ],
    'root'=>__DIR__,
    'showErrors'=>true,
    'url'=>'http://public.local',
    'localhost'=>'http://localhost/vps'
];
require __DIR__.'/vendor/autoload.php';
return new Bell\Bell($cfg);
?>
