<?php
require_once 'function.php';
spl_autoload_register(function($class){

    require_once $_SERVER['DOCUMENT_ROOT'].'/PHP/INVENTORYSYSTEM/class/'.$class.'.php';
});