<!DOCTYPE html>
<html>
    <head>
        <title>Murp.com</title>
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/blue-theme.css">
        <link rel="stylesheet" href="css/loader.css">
        <link rel="icon" href="icon.png" type="image/png">
        <style>
            a {
                display: block;
                padding: 8px;
                background-color: #dddddd;
            }
        </style>
    </head>
    <body class="w3-theme-dark-page">

        <div class="w3-bar w3-theme-dark" style="top:0;height:1%;">
            <a href="mindex.php" class="w3-bar-item w3-btn w3-hover-blue">Home</a>
            <a href="blog.php" class="w3-bar-item w3-btn w3-hover-blue">Blog</a>
            <a href="tutorial.php" class="w3-bar-item w3-btn w3-hover-blue">Tutorials</a>
            <a href="projects.php" class="w3-bar-item w3-btn w3-hover-blue">Projects</a>
            <button class="w3-btn w3-right" id="opener" onclick="toggle()" height="23px">Toggle sidebar <img src="images/sidebar.png" height="23px"></button>
        </div>
        <div class="w3-sidebar w3-bar-block w3-card w3-collapse w3-animate-right" style="width:20%;right:0" id="sidebar">
            <h5 class="w3-bar-item" onclick="w3_close()"><b>New Articles</b></h5>
            <script src="js/newarticles.js"></script>
            <div id="linktainer"></div>
        </div>
        <div class="w3-theme-dark-page w3-container" style="margin-right:10px;margin-top:1%" id="mpage">

        <?php
        function getArticles(){
            require "creds.php";
            $articles=array();
            $con = new mysqli("localhost", $user, $pass);
            if ($con->connect_error){
                die("Connection failed: " . $con ->connect_errors);
            }
            $con->select_db("blog");
            $sql = "SELECT * FROM posts";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if(file_exists("images/by-id/" . $row["id"])){
                        $img = "images/by-id/" . $row["id"];
                    }else{
                        $img = "images/by-id/fallback.png\" height=\"96";
                    }
                    array_push($articles, "\t\t<div class=\"w3-container w3-card\">\n\t\t\t<br>\n\t\t\t<center>\n\t\t\t\t<a class=\"w3-theme-dark-page\" href=\"view_article.php?id=" . $row["id"] . "\"><h1><b>".$row["title"]."</b></h1></a>\n\t\t\t\n\t\t\t\t<br>\n\t\t\t\t<img class=\"w3-center\" src=\"".$img. "\">\n\t\t\t\t<br>\n\t\t\t\t<p class=\"w3-center\" style=\"text-align: justify; width: 98%\">\n\t\t\t\t\t" . $row["body"] . "\n\t\t\t\t</p>\n\t\t\t</center>\n\t\t\t<p class=\"w3-right\">" . $row["date"] . "</p>\n\t\t</div>\n\t\t<hr style=\"border-top: 1px solid white;\">\n\n");
                }
            } else {
                echo "0 results";
            }
            $con->close();
            for ($x = count($articles); $x >= 0; $x--) {
                echo $articles[$x];
            }
        }
        getArticles();
        ?>
    </div>
    <script src="js/sidebar.js"></script>
    </body>
</html>
