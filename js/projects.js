function getNA() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            document.getElementById("linktainerp").innerHTML =
            this.responseText;
        }
    };
    xhttp.open("GET", "jsprojects.php?count=10");
    xhttp.send();
}
getNA();
