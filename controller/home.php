<?php
return function($bell){
    $header=$bell->plugin("header");
    $produtos=$bell->model('lerProdutos');
    $moedas=$bell->cfg['moedas'];
    $bell->view('home',$header,$produtos,$moedas);
};
?>
