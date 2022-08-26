function getNA() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            document.getElementById("linktainercs").innerHTML =
            this.responseText;
        }
    };
    xhttp.open("GET", "../jssnippets.php?count=3");
    xhttp.send();
}
getNA();
