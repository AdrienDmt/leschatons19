/**
 * Created by julien on 23/05/17.
 */

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


function init(){

    var art = document.getElementById('art')
    var categ = $_GET('categorie');

    for(var i =0; i<8;i++){

    }
}

function ajax_get_request(callback, url, async)
{
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if ((xhr.readyState==4) && (xhr.status==200))
            callback(xhr.response);
    };
    xhr
}