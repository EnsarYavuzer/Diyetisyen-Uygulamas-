<?php
/* 
 * Diyetisyen otomasyonu php oop
 */
//System dosyalarını otomatik include ediyoruz
function autoload($classname) {
    $filename = "system/libs/". $classname .".php";
    include_once($filename);
}

spl_autoload_register('autoload');
/*
include "system/libs/Controller.php";
include "system/libs/Load.php";
include "system/libs/Model.php";
include "system/libs/Database.php";
include "system/libs/Bootstrap.php";

 *  * 
*/
//Config dosyası init etme
include_once 'app/config/config.php';
//Bootstrap
$boot= new Bootstrap();
 ?>



