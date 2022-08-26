<?php
if(isset($_GET["type"])){
    $t = $_GET["type"];
    if($t == "date"){
        echo date("m/d/y");
    }elseif ($t == "hrdate") {
        echo date("l, F d, Y");
    }elseif ($t == "time") {
        echo date("H:i");
    }elseif ($t == "times") {
        echo date("H:i:s");
    }elseif ($t =="hrtime"){
        echo date("g:i A");
    }elseif ($t =="hrtimes"){
        echo date("g:i:s A");
    }elseif ($t =="h"){
        echo date("g");
    }elseif ($t =="m"){
        echo date("i");
    }elseif ($t =="dst"){
        echo date("I");
    }
}else{
    echo date("D m/d/Y g:i:s A");
}
?>
