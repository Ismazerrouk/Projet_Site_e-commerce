
function zoom(id){

    var element1 = document.getElementById(id);
    source = element1.getAttribute("src");
    var element2 = document.getElementById("imageZoom");
    element2.setAttribute("src",source);
    var element3 = document.getElementById("divZoom");
    element3.style.display="block";
    // var table = document.getElementById("table");
    // console.log(table);
    
    // console.log(element2);
    window.scrollTo(0,0);
    document.body.style.background = "black";
    var table = document.getElementsByTagName("table");

    table[0].style.display='none';


}

function fermer(){
    var element3 = document.getElementById("divZoom");
    element3.style.display="none";
    document.body.style.background ="rgb(227, 227, 227)";
    var table = document.getElementsByTagName("table");
    
    table[0].style.display ='block';
}

    