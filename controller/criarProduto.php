<?php
return function($bell){
    $produto=$_GET;
    $produto['created_at']=time();
    $produto['updated_at']=time();
    $id=$bell->model('criarProduto',$produto);
    if(is_numeric($id)){
        $url=$bell->cfg['url'].'?id='.$id;
        header("Location: ".$url);
    }else{
        print 'erro ao salvar no db';
        print '<pre>';
        var_dump($bell->db()->error());
    }
};
?>
