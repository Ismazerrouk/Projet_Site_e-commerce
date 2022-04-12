function erreur() {
    const pathalpha = /^[a-zA-Z\-]+$/g;
    const pathernTel = /^((\+)33|0)[1-9](\d{2}){4}$/g;
    const pathMail = /\S+@\S+\.\S+/;
    var nom = document.getElementById("Nom");
    var prenom = document.getElementById('prenom');
    var Email = document.getElementById("Email");
    var telephone = document.getElementById("telephone");


    if (pathalpha.test(nom.value) == false) {
        var msg = document.getElementById("erreurMsg");
        msg.innerHTML = "Veuillez entrer un nom correct !";
        msg.style.color = 'red';
    }

    if (pathMail.test(Email.value) == false || Email.value == '') {
        var msg = document.getElementById("erreurMsgEmail");
        msg.innerHTML = "Veuillez entrer un mail correct !";
        msg.style.color = 'red';
    }
    if (pathalpha.test(prenom.value) == false) {
        var msg = document.getElementById("erreurMsgPrenom");
        msg.innerHTML = "Veuillez entrer un prénom correct !";
        msg.style.color = 'red';
    }
    if (pathernTel.test(telephone.value) == false || telephone.value == '') {
        var msg = document.getElementById("erreurMsgTelephone");
        msg.innerHTML = "Veuillez entrer un numéro de téléphone correct !";
        msg.style.color = 'red';

    }

    //todo
    var date2 = document.getElementById("Date de naissance");
    if (date2.value > "31/12/2006") {

        var msg = document.getElementById("erreurMsgNaissance");
        msg.innerHTML = "Age minimum requis de 16 ans";
        msg.style.color = 'red';
    }


    let today = new Date();

    var date3 = today;



    var date1 = document.getElementById("Date de contact");
    var date1 = new Date(date1.value);
    console.log(date1.getDay(), date3.getDay());



    if (date1.getDay() != date3.getDay()) {

        var msg = document.getElementById("erreurMsgContact");
        msg.innerHTML = "Date invalide";
        msg.style.color = 'red';
    }

}