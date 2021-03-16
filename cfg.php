<?php
$cfg=[
    'db'=>[
        'database_type' => 'sqlite',
        'database_file' => __DIR__.'/db/db.sqlite3'
    ],
    'root'=>__DIR__,
    'showErrors'=>true,
    'url'=>'http://public.local',
    'localhost'=>'http://localhost/bell'
];
require __DIR__.'/vendor/autoload.php';
return new Bell\Bell($cfg);
?>
