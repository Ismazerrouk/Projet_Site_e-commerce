function erreur(){
    var L =['#','(',')','=','?','!','§','[',']','}','{','+','-'];
    var nom = document.getElementById("Nom");
    var prenom = document.getElementById('prenom');
    var Email = document.getElementById("Email");
    var telephone = document.getElementById("telephone");

    for(var i = 0;i<L.length;i++){
        if(nom.value == '' || nom.value.includes(L[i])){
            var msg = document.getElementById("erreurMsg");
            msg.innerHTML ="Veuillez entrer un nom correct !";
            msg.style.color='red';
        }
        if(Email.value == '' || Email.value.includes(L[i])){
            var msg = document.getElementById("erreurMsgEmail");
            msg.innerHTML ="Veuillez entrer un mail correct !";
            msg.style.color='red';
        }
        if(prenom.value == '' || prenom.value.includes(L[i])){
            var msg = document.getElementById("erreurMsgPrenom");
            msg.innerHTML ="Veuillez entrer un prénom correct !";
            msg.style.color='red';
        }
        if(typeof(telephone.value) == String ){
            var msg = document.getElementById("erreurMsgTelephone");
            msg.innerHTML ="Veuillez entrer une numéro de téléphone correct !";
            msg.style.color='red';
        }

    }
    

}