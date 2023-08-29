window.onload = function() {
    var fechaInput = document.getElementById('fecha');
    var horaInput = document.getElementById('hora');
    var folioInput = document.getElementById('folio');

    var fechaActual = new Date();
    var options = { year: 'numeric', month: 'long', day: 'numeric' };
    fechaInput.value = fechaActual.toLocaleDateString('es-ES', options);

    var horaActual = new Date().toLocaleTimeString();
    horaInput.value = horaActual;

    var folio = 1;
    folioInput.value = folio;
}

function obtenerDatos() {
    var registro = document.getElementById("registro").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                console.log("Respuesta JSON:", data);

                document.getElementById("gerencia").value = data.gerencia;
                document.getElementById("sucursal").value = data.sucursal;
                document.getElementById("region").value = data.region;
            } else {
                console.error("Error al obtener los datos");
            }
        }
    };

    xhr.open("POST", "datos.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("registro=" + encodeURIComponent(registro));
}

