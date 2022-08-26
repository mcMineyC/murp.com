
function w3_open() {
    document.getElementById("mpage").style.marginRight = "20%";
    document.getElementById("sidebar").style.width = "20%";
    document.getElementById("sidebar").style.visible = "visible";
}
function w3_close() {
    document.getElementById("mpage").style.marginRight = "10px";
    document.getElementById("sidebar").style.visible = "hidden";
    document.getElementById("sidebar").style.width = "0%";
}
function toggle(){
    if(document.getElementById("sidebar").style.visible == "hidden"){
        w3_open();
    }else{
        w3_close();
    }
}
let w = window.innerWidth;
let h = window.innerHeight;
if(w>500){
    w3_open();
}else{
    w3_close();
}
