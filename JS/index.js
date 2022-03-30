window.onload = function() {
    var header = document.getElementsByClassName("entete")[0];
    var sticky = header.offsetTop;
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > sticky){
        header.classList.add("sticky")
        }
        else{
        header.classList.remove("sticky");
        }
    }); 
        
}   
