<?php
return function($db,$produto){
    if($db()->insert('produto',$produto)){
        return true;
    }else{
        die(var_dump($db->error()));
    }
};
?>
