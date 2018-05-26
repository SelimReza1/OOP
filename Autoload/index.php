<?php
// onekgola file thakle segola sobgola ekta ekta iclude kora jhamela seijonno autoload function use kora hoy jeta sobgola auto load kore dey
//spl_autoload_register (recently eita use hoy)

//function __autoload($class_name){
//    echo "$class_name<br>";
//    include "classes/".$class_name.".php";
//}

spl_autoload_register(function ($class_name){
    include "classes/".$class_name.".php"; //here classes directory name
});
$java = new Java();
$python = new Python();
$ruby = new Ruby();
?>