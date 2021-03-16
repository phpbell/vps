<?php
return function($bell){
    $produto=$_GET;
    $produto['created_at']=time();
    $produto['updated_at']=time();
    if($bell->model('criarProduto',$produto)){
        $url=$bell->cfg['url'];
        header("Location: ".$url);
    }
};
?>
