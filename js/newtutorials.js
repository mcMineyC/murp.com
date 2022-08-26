function getNA() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            document.getElementById("linktainernt").innerHTML =
            this.responseText;
        }
    };
    xhttp.open("GET", "jstutorials.php?count=10");
    xhttp.send();
}
getNA();
