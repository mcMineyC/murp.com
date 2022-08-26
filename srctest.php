<!DOCTYPE html>
<html>
    <head>
        <title>Murp.com
        </title>
        <link rel="stylesheet" href="css/w3.css">
        <link id="t" rel="stylesheet" href="css/blue-theme.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="icon" href="icon.png" type="image/png">
    </head>
    <style>
        a {
            display: block;
            padding: 8px;
            background-color: #dddddd;
        }
    </style>
    <body class="w3-theme-dark-page">
        <div class="w3-bar w3-theme-dark" style="top:0;height:1%;">
            <a href="mindex.php" class="w3-bar-item w3-btn w3-hover-blue">Home</a>
            <a href="blog.php" class="w3-bar-item w3-btn w3-hover-blue">Blog</a>
            <a href="tutorial.php" class="w3-bar-item w3-btn w3-hover-blue">Tutorials</a>
            <a href="projects.php" class="w3-bar-item w3-btn w3-hover-blue">Projects</a>
        </div>

        <input type="button" value="change" onclick="document.getElementById('t').src = 'css/red-theme.css'">
        <div class="w3-card" style="margin:1%;width:48%;height:50%;float:left;">
            <center><h1><b>New Posts</b></h1></center>
            <script src="js/newarticles.js"></script>
            <div id="linktainer" style="text-align:left;overflow-x:hidden;overflow-y:scroll"></div>
        </div>
        <div class="w3-card" style="margin:1%;width:48%;height:50%;float:right;">
            <center><h1><b>New Tutorials</b></h1></center>
            <script src="js/newtutorials.js"></script>
            <div id="linktainernt" style="text-align:left;overflow-x:hidden;overflow-y:scroll"></div>
        </div>
        <br>
        <div class="w3-card" style="margin:1%;width:48%;height:50%;float:left;">
            <center><h1><b>Projects</b></h1></center>
            <script src="js/projects.js"></script>
            <div id="linktainerp" style="text-align:left;overflow-x:hidden;overflow-y:scroll"></div>
        </div>
        <div class="w3-card" style="margin:1%;width:48%;height:50%;float:right;">
            <center><h1><b>Code Snippets</b></h1></center>
            <script src="js/codesnippets.js"></script>
            <div id="linktainercs" style="text-align:left;overflow-x:hidden;overflow-y:scroll"></div>
        </div>

    </body>
</html>
