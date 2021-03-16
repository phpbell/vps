<?php
return function($db){
    return $db()->select("produto", "*", [
        "id[>]" => 0
    ]);
};
?>
