<?php

function dynamic_body (){
    $str= htmlspecialchars($_GET["page"]);
    
    $inPage = array("home", "php", "sql");

    if(in_array($str, $inPage)){

        include "$str.html";
    }else {
        echo "<p>Unknown page</p>" . PHP_EOL;
    }
    return;
}