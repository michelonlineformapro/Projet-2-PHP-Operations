<?php

ob_start();

if(isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = "home";
}


if($url == 'home'){
    require "views/home.php";
}elseif ($url == 'table3'){
    require "views/table3.php";
}elseif ($url == 'choixtable'){
    require "views/choixtable.php";
}elseif ($url == 'checkbox'){
    require "views/checkbox.php";
}elseif ($url == 'random'){
    require "views/random.php";
}

$content = ob_get_clean();

require "views/template.php";