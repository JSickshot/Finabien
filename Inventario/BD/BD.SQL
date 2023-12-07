<<<<<<< HEAD
CREATE TABLE validainv (
    REGION VARCHAR(255) NOT NULL,
    ENTIDAD VARCHAR(255) NOT NULL,
    REGISTRO VARCHAR(255) NOT NULL,
    SUCURSAL_EQUIP VARCHAR(255),
    NOMBRE_SUC VARCHAR(255),
    ESTADO_SUC VARCHAR(255),
    TIPO_COMM VARCHAR(255),
    TIPO_EQUI VARCHAR(255),
    MODELO VARCHAR(255),
    IP_CAM VARCHAR(255),
    ESTATUS_EQUIPO VARCHAR(255),
    SERIE VARCHAR(255),
    INVENTARIO VARCHAR(255),
    ESTATUS_ALMAC VARCHAR(255),
    MODELO_ALMAC VARCHAR(255),
    NUM_SERIE VARCHAR(255),
    NUM_INV_ALMAC VARCHAR(255),
    PRIMARY KEY (REGISTRO)
=======
CREATE TABLE uinventario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'usuario') NOT NULL
>>>>>>> 5a40c5828e8f30b3f1c66faba37f5fd365d2ee4f
);

insert into uinventario (nombre,contraseña,rol) values ('Fernando', 12345, 'usuario');
insert into uinventario (nombre,contraseña,rol) values ('Ilse', 12345, 'usuario'); 
insert into uinventario (nombre,contraseña,rol) values ('Meche', 12345, 'usuario'); 
insert into uinventario (nombre,contraseña,rol) values ('Roberto', 12345, 'usuario'); 
insert into uinventario (nombre,contraseña,rol) values ('Mario', 1234, 'admin'); 

