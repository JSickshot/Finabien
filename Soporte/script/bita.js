src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"


    document.addEventListener('DOMContentLoaded', () => {
        const fechaInput = document.getElementById('fecha');
        const fechaActual = new Date();
        const fechaMx = new Date(fechaActual.toLocaleString("en-US", { timeZone: "America/Mexico_City" }));
        const anio = fechaMx.getFullYear().toString().padStart(4, '0');
        const mes = (fechaMx.getMonth() + 1).toString().padStart(2, '0');
        const dia = fechaMx.getDate().toString().padStart(2, '0');
        const fechaFormateada = `${anio}-${mes}-${dia}`;
        fechaInput.value = fechaFormateada;

        function agregarFila(tablaId) {
            const tabla = document.getElementById(tablaId).getElementsByTagName('tbody')[0];
            const filas = tabla.getElementsByTagName('tr');
            const ultimaFila = filas[filas.length - 1];
            const inputs = ultimaFila.getElementsByTagName('input');
            let filaVacia = true;
            for (const input of inputs) {
                if (input.value.trim() !== '') {
                    filaVacia = false;
                    break;
                }
            }

            if (!filaVacia) {
                const nuevaFila = tabla.insertRow(tabla.rows.length);
                if (tablaId === 'tabla-camaras') {

                    for (let i = 0; i < 6; i++) {
                        const celda = nuevaFila.insertCell(i);
                        celda.innerHTML = '<input type="text">';
                    }
                } else if (tablaId === 'tabla-alarma') {

                    for (let i = 0; i < 8; i++) {
                        const celda = nuevaFila.insertCell(i);
                        celda.innerHTML = '<input type="text">';
                    }
                }
            }
        }

        function eliminarFila(tablaId) {
            const tabla = document.getElementById(tablaId).getElementsByTagName('tbody')[0];
            if (tabla.rows.length > 1) {
                tabla.deleteRow(tabla.rows.length - 1);
            }
        }

        const botonesAgregar = document.querySelectorAll('.btn-agregar');
        botonesAgregar.forEach((boton) => {
            boton.onclick = function () {
                const tablaId = this.getAttribute('data-tabla-id');
                agregarFila(tablaId);
            };
        });

        const botonesEliminar = document.querySelectorAll('.btn-eliminar');
        botonesEliminar.forEach((boton) => {
            boton.onclick = function () {
                const tablaId = this.getAttribute('data-tabla-id');
                eliminarFila(tablaId);
            };
        });


    });



    function obtenerDatos() {
        var registro = document.getElementById("registro").value;
        console.log("Función obtenerDatos() llamada."); 
        console.log("Valor de REGISTRO en JavaScript:", registro);

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    console.log("Respuesta JSON:", data); 

                    document.getElementById("gerencia").value = data.gerencia;
                    document.getElementById("sucursal").value = data.sucursal;
                } else {
                    console.error("Error al obtener los datos");
                }
            }
        };

        xhr.open("POST", "obtener_datos.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("registro=" + encodeURIComponent(registro));
    }