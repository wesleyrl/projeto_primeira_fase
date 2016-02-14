<?php

define('HOST','localhost');
define('USER','wesleyrl');
define('PASS','wesleyrl');
define('DBSA','wesleyrl');

function __autoload($class){
    $Folders = array ('class','Interfaces');
    $iDir = null;

    foreach($Folders as $DirName):
        if(is_null($iDir) && file_exists(__DIR__."//{$DirName}//{$class}.php") && !is_dir(__DIR__."//{$DirName}//{$class}.php")):
                include_once(__DIR__."//{$DirName}//{$class}.php");
                $iDir = true;
        endif;
    endforeach;

    if(!$iDir):
        trigger_error('Não foi possivel incluir a classe', E_USER_ERROR);
    endif;
}