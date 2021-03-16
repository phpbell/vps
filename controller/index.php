<?php
return function($bell,$name){
    $assetsHeader=$bell->plugin("assetsHeader");
    $dbInfo=$bell->model("info");
    $bell->view('home',$name,$assetsHeader,$dbInfo);
};
?>
