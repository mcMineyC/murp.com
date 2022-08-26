<?php
if(isset($_GET["stat"]) && isset($_GET["ip"])){
    $t = $_GET["stat"];
    if($t == "on"){
        shell_exec("sh on.sh ".$_GET["ip"]);
        echo "1";
    }else if($t == "off"){
        shell_exec("sh off.sh ".$_GET["ip"]);
        echo "1";
    }else{
        echo "0 (nostat)";
    }
}else{
    echo "0 (noip or stat) [".$_GET['ip'].":".$_GET['stat']."]";
}
?>
