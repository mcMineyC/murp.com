<!DOCTYPE html>
<html>
    <head>
        <title>New Articles</title>
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
        if ($con->connect_error){
            echo "Connection failed: " . $con ->connect_errors;
        }
        $con->select_db("blog");
        $sql = "SELECT * FROM snippets";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($articles, "<a href=\"view_snippet.php?id=" . $row["id"] . "\" class=\"w3-bar-item w3-btn w3-hover-blue\">" . $row["title"] . "</a>\n");
                $id=$row["id"];
            }
        } else {
            echo "0 results";
        }
        $con->close();
        for($x = 0; $x <= $cnt; $x++){
            echo $articles[$id-$x-1];
            echo "<br>";
        }
        ?>
    </body>
</html>
