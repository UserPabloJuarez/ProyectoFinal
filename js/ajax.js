




function Menu(tabla, op,parametros)
{   var pagina = tabla + "?op=" + op + "&" + parametros;
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            
           document.getElementById("contenido1").innerHTML=xmlhttp.responseText;
                             
                          
        }
    }
    xmlhttp.open("GET", pagina, true);
    xmlhttp.send(null);
}



