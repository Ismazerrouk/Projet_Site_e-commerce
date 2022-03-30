function cacher(){

    var stock = document.getElementsByClassName("stock");
    
    for(var i = 0; i<stock.length; i++){
        if(stock[i].style.display != "none" ){
            stock[i].style.display ='none';
            var texte = document.getElementById("btn-cacher");
            texte.setAttribute('value', 'Afficher le stock');
        }
        else{
            stock[i].style.removeProperty("display");
            var texte2 = document.getElementById('btn-cacher');
            texte2.setAttribute('value', 'Cacher le stock');
        }
    }

    
}


// const elt = document.getElementById('cacherStock');    // On récupère l'élément sur lequel on veut détecter le clic
//  elt.addEventListener('click', function() {          // On écoute l'événement click
//      elt.innerHTML = "C'est cliqué !";               // On change le contenu de notre élément pour afficher "C'est cliqué !"
//  });