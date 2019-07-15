
window.addEventListener("load", function() {


    setInterval(traerPublicaciones, 20000)
})

function traerPublicaciones() {
    fetch("http://localhost:8080/api/notifications")
    .then(function(respuesta) {
        return respuesta.json()

    })
    .then(function(informacion) {
        var cantidadLibrosOriginal = document.querySelectorAll("div.card-body").length;


        if (informacion.length > cantidadLibrosOriginal) {
            document.querySelector("h3").style.display = "block";
             var elUltimoId=document.querySelector("p");
             var elString= elUltimoId.textContent;
             var numerito=parseFloat(elString);
             var elIdCargado=numerito+1;

             console.log(elIdCargado);
            document.querySelector("h3").onclick = function() {
              window.location.href="/bookPost/"+ elIdCargado;



            }
        }

    })
    .catch(function(e) {
    })
}
