<?php
return function($str,$assetsHeader,$dbInfo){
    print '<center>';
    print $assetsHeader;
    print 'hello '.$str;
    print '</center>';
    print '<pre>';
    print implode('<br>',$dbInfo);
    print '</pre>';
};
