
/*

Script de récupération des produits d'un utilisateur pour son panier.

Auteur : RC

*/

function init() {

    var mail = getCookie("connecte");

    ajax_get_request(afficheProduitsPanier, "../controleur/recupCommande.php?mail="+mail, true); // appel asynchrone à la récupération de produits

}


// function afficheProduitsPanier(json) {
//     var table = document.getElementsByTagName('table')[0];
//     console.log(table);
//     for (var i = 0; i < json.length; i++) {
//         document.create
//         console.log(json[i]);
//     }
// }





// Cookie
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


// AJAX
function ajax_get_request(callback, url, async)
{
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if ((xhr.readyState==4) && (xhr.status==200))
            callback(JSON.parse(xhr.responseText));
    };
    xhr.open("GET",url,async);
    xhr.send();
}
