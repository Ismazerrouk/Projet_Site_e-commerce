// Fonction de récupération d'un objet XMLHttpRequest
function getXhr() {
    var xhr = null;
    if (window.XMLHttpRequest) // Firefox et autres
        xhr = new XMLHttpRequest();
    else if (window.ActiveXObject) { // Internet Explorer < 7
        try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
    } else { // XMLHttpRequest non supportée par le navigateur
        alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
        xhr = false;
    }
    return xhr;
}

function MajStock(element) {
    var xhr = new XMLHttpRequest();
    console.log(element);
    alert("stockkkkk !");
    // var xhr;
    // if ((xhr = getXhr()) == null) return;
    // var stock = document.getElementsByClassName("stock");
    // var ref = document.getElementsByClassName("ref");

    // xhr.onreadystatechange = function () {
    //     if (xhr.readyState == 4 && xhr.status == 200) {
    //         reponse = xhr.responseText;
    //         stock.innerHTML = reponse;
    //     }
    // }

    // // Ouverture et envoi de la requete
    // xhr.open("GET", "majStock.php", true);
    // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
    // xhr.send("nbr=" + document.getElementsByClassName("stock").value);
}