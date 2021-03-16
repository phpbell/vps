<?php
return function($db,$produto){
    $db()->insert('produto',$produto);
    return $db()->id();
};
?>
