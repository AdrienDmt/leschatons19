/**
 * Created by julien on 23/05/17.
 */

function init(){
    //console.log("test");
    var categ = $_GET('categorie');
    var data = encodeURIComponent(categ);
    try{
        console.log(data);
        ajax_get_request(placementDiv, '../controleur/recupVisuelProduit.php?categorie='+data, false);
    }catch(err){
        alert("erreur : "+err);
    }
}

//========================https://www.creativejuiz.fr/blog/javascript/recuperer-parametres-get-url-javascript==================//
function $_GET(param) {
    var vars = {};
    window.location.href.replace( location.hash, '' ).replace(
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if ( param ) {
        return vars[param] ? vars[param] : null;
    }
    return vars;
}
//=========================================================================================================================//




function ajax_get_request(callback, url, async)
{
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if ((xhr.readyState==4) && (xhr.status==200))
            callback(xhr.response);
    };
    xhr.open("GET",url,async);
    xhr.send();
}

function placementDiv(result){
    console.log("retour result : " + result[0].length);
    var art = document.getElementsByTagName('article');
    for($i=0;$i<result.length;$i++){
        var lien = document.createElement("a");
        lien.setAttribute("href","../controleur/index?page=descriptionProd&ref=".result[$i]['ref']);
        lien.setAttribute("class","Chat");
        var div = document.createElement("div");
        var figure = document.createElement("figure");
        var img = document.createElement("img");
        img.setAttribute("src", [$i]['photo']);
        var figcapt = document.createElement("figcaption");
        figcapt.innerHTML(result[$i]['intitule']);
        var descript = document.createElement("p");
        descript.innerHTML(result[$i]['prix']);
        figure.appendChild(img);
        div.appendChild(figure);
        div.appendChild(figcapt);
        div.appendChild(descript);
        lien.appendChild(div);
        art.appendChild(lien);
    }
}

