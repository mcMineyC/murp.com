<!DOCTYPE html>
<html>
    <head>
        <title>Code Snippets</title>
    </head>
    <body>
        <?php
        if(isset($_GET["count"])){
            $cnt = number_format($_GET["count"])-1;
        } else {
            $cnt = 4;
        }
        $articles=array();
        $id=0;
        require "creds.php";
        $con = new mysqli("localhost", $user, $pass);
        if ($con->connect_error){
            echo "Connection failed: " . $con ->connect_errors;
        }
        $con->select_db("blog");
        $sql = "SELECT * FROM snippets";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($articles, "<p style=\"font-size: 20pt\"><b>  " . $row["lang"] . ":</b> <code style=\"font-size: 15px\">" . $row["code"] . "</code></p>");
                $id=$row["id"];
            }
        } else {
            echo "No snippets...";
        }
        $con->close();
        for($x = 0; $x <= $cnt; $x++){
            echo $articles[$id-$x-1];
            echo "<br>";
        }
        ?>
    </body>
</html>
