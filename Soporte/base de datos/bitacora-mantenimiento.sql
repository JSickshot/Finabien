CREATE TABLE bitacora_mantenimiento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE,
    reporte VARCHAR(100),
    registro VARCHAR(100),
    gerencia VARCHAR(100),
    sucursal VARCHAR(100),
    nombre VARCHAR(100),
    tecnico VARCHAR(100),
    correctivo VARCHAR(10),
    preventivo VARCHAR(10),
    revision_camaras VARCHAR(10),
    limpieza_camaras VARCHAR(10),
    limpieza_sistema_alarmas VARCHAR(10),
    servicios_limpieza VARCHAR(10),
    observaciones TEXT
);


CREATE TABLE camaras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bitacora_id INT,
    tipo VARCHAR(100),
    modelo VARCHAR(100),
    no_serie VARCHAR(100),
    no_inventario VARCHAR(100),
    estatus VARCHAR(100),
    FOREIGN KEY (bitacora_id) REFERENCES bitacora_mantenimiento(id)
);

CREATE TABLE alarmas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bitacora_id INT,
    modelo VARCHAR(100),
    no_serie VARCHAR(100),
    no_inventario VARCHAR(100),
    no_sensores_movimiento INT,
    no_sensores_magneticos INT,
    no_boton INT,
    estatus VARCHAR(100),
    FOREIGN KEY (bitacora_id) REFERENCES bitacora_mantenimiento(id)
);

