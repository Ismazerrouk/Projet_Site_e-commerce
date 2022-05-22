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
    var ref = element.parentNode.parentNode.getElementsByClassName('ref')[0]
    var stock = element.parentNode.parentNode.getElementsByClassName('stock')[0];
    var qte = element.parentNode.parentNode.getElementsByClassName('nb-article')[0];
    console.log(stock);
    var data = "stock=" + stock.innerHTML + "&" + "qte=" + qte.innerHTML + "&" + "ref=" + ref.innerHTML;
    var xhr;
    if ((xhr = getXhr()) == null) return;

    if (qte.innerHTML != null) {
        stock.innerHTML = stock.innerHTML - qte.innerHTML;
    }

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            reponse = xhr.responseText;

        }
    }

    // Ouverture et envoi de la requete ajax
    xhr.open("POST", "majStock.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
    xhr.send(data);
}