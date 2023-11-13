window.onload = function() {
    var fechaInput = document.getElementById('fecha');
    var horaInput = document.getElementById('hora');
    var folioInput = document.getElementById('folio');

    var fechaActual = new Date();
    var options = { year: 'numeric', month: 'long', day: 'numeric' };
    fechaInput.value = fechaActual.toLocaleDateString('es-ES', options);

    var horaActual = new Date().toLocaleTimeString();
    horaInput.value = horaActual;

    obtenerProximoFolio().then(function(folio) {
        folioInput.value = folio;
    });
}

function obtenerProximoFolio() {
    return new Promise(function(resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    resolve(data.proximoFolio);
                } else {
                    reject("Error al obtener el próximo folio");
                }
            }
        };

        xhr.open("GET", "prox-poli.php", true);
        xhr.send();
    });
}
