<?php
        /*
        if(isset($_GET["count"])){
            $cnt = number_format($_GET["count"])-1;
        } else {
            $cnt = 4;
        }
        */

        $articles=array();
        $id=0;
        $con = new mysqli("localhost", "doit", "2DoItN0W!");
        if ($con->connect_error){
            echo "Connection failed: " . $con ->connect_errors;
        }
        $con->select_db("doit");
        $sql = "SELECT * FROM tasks";
        $result = $con->query($sql);
        $cnt = $result->num_rows;
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_unshift($articles, "\n{\"id\":" . $row["id"] . ",\"title\":\"" . $row["title"] . "\",\"completeby\":{\"date\":{\"d\":" . $row["dated"] . ",\"m\":" . $row["datem"] . ",\"y\":" . $row["datey"] . "},\"time\":{\"h\":".$row["timeh"].",\"m\":".$row["timem"]."}},\"preminder\":".$row["preminder"].",\"done\":".$row["completed"]."}");
                echo exec("sudo -u jedi notify-send murp");
                $id=$row["id"];
            }
        } else {
            echo "0 results";
        }
        $con->close();
        foreach ($articles as $key => $value) {
            echo $value;
        }
?>