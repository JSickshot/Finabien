function obtenerDatos() {
    var registro = document.getElementById("registro").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                console.log("Respuesta JSON:", data);

                document.getElementById("region").value = data.region;
                document.getElementById("entidad").value = data.entidad;
                document.getElementById("sucursal").value = data.sucursal;
                document.getElementById("NOMBRE_SUCURSAL").value = data.nombre;
                document.getElementById("estado_sucursal").value = data.estado_sucursal;
                document.getElementById("tipo_comm_suc").value = data.tipo_comm_suc;
                document.getElementById("tipo_equipo").value = data.tipo_equipo;
                document.getElementById("modelo_equip").value = data.modelo_equip;
                document.getElementById("ip_cam").value = data.ip_cam;
                document.getElementById("estatus_equi").value = data.estatus_equi;
                document.getElementById("serie").value = data.serie;
                document.getElementById("inventario").value = data.inventario;
                document.getElementById("estats_sistm_almac").value = data.estats_sistm_almac;
                document.getElementById("modelo").value = data.modelo;
                document.getElementById("numero_s_almac").value = data.numero_s_almac;
                document.getElementById("num_inv_almace").value = data.num_inv_almace;
                
            } else {
                console.error("Error al obtener los datos");
            }
        }
    };

    xhr.open("POST", "datos.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("registro=" + encodeURIComponent(registro));
}
