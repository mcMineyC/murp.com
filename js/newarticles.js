function getNA() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            document.getElementById("linktainer").innerHTML =
            this.responseText;
        }
    };
    xhttp.open("GET", "newarticles.php");
    xhttp.send();
}
getNA();
