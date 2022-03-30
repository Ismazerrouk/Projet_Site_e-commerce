function moins(id) {
    var nb_articles = document.getElementsByClassName("nb-article");

    if (nb_articles[0].innerHTML > 0 && id == "btn-1") {
        nb_articles[0].innerHTML = nb_articles[0].innerHTML - 1;
    }

    if (nb_articles[1].innerHTML > 0 && id == "btn-2") {
        nb_articles[1].innerHTML = nb_articles[1].innerHTML - 1;
    }

    if (nb_articles[2].innerHTML > 0 && id == "btn-3") {
        nb_articles[2].innerHTML = nb_articles[2].innerHTML - 1;
    }

    if (nb_articles[3].innerHTML > 0 && id == "btn-4") {
        nb_articles[3].innerHTML = nb_articles[3].innerHTML - 1;
    }

    if (nb_articles[4].innerHTML > 0 && id == "btn-5") {
        nb_articles[4].innerHTML = nb_articles[4].innerHTML - 1;
    }
}




function plus(id) {
    var nb_articles = document.getElementsByClassName("nb-article");
    var stock = document.getElementsByClassName("stock");
    // console.log(nb_articles[0].innerHTML);

    if (nb_articles[0].innerHTML >= 0 && id == "btn+1"
        && Number(stock[1].innerHTML) > Number(nb_articles[0].innerHTML)) {

        nb_articles[0].innerHTML = Number(nb_articles[0].innerHTML) + 1;
    }

    if (nb_articles[1].innerHTML >= 0 && id == "btn+2"
        && Number(stock[2].innerHTML) > Number(nb_articles[1].innerHTML)) {

        nb_articles[1].innerHTML = Number(nb_articles[1].innerHTML) + 1;
    }

    if (nb_articles[2].innerHTML >= 0 && id == "btn+3"
        && Number(stock[3].innerHTML) > Number(nb_articles[2].innerHTML)) {

        nb_articles[2].innerHTML = Number(nb_articles[2].innerHTML) + 1;
    }

    if (nb_articles[3].innerHTML >= 0 && id == "btn+4"
        && Number(stock[4].innerHTML) > Number(nb_articles[3].innerHTML)) {

        nb_articles[3].innerHTML = Number(nb_articles[3].innerHTML) + 1;
    }

    if (nb_articles[4].innerHTML >= 0 && id == "btn+5"
        && Number(stock[5].innerHTML) > Number(nb_articles[4].innerHTML)) {
        nb_articles[4].innerHTML = Number(nb_articles[4].innerHTML) + 1;
    }
}