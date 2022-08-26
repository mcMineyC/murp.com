<?php
if(file_exists("tmp_article.php")){
     exec("rm /var/www/mci/tmp_article.php");
} else {
    echo "no"
}
?>
