<?php
$cfg=[
    'db'=>[
        // required
        'database_type' => 'mysql',
        'database_name' => 'teste',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'senha1234'
    ],
    'root'=>__DIR__,
    'showErrors'=>true,
    'url'=>'http://public.local',
    'localhost'=>'http://localhost/bell'
];
require __DIR__.'/vendor/autoload.php';
return new Bell\Bell($cfg);
?>
