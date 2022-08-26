<?php
function getArticles(){
    $con = new mysqli("localhost", "blog", "2LoadData!");
    if ($con->connect_error){
        die("Connection failed: " . $con ->connect_errors);
    }
    echo "connected successfully"
    $con->close();
}
?>
