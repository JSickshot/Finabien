CREATE TABLE uinventario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'usuario') NOT NULL
);

insert into uinventario (nombre,contraseña,rol) values ('Fernando', 12345, 'usuario');
insert into uinventario (nombre,contraseña,rol) values ('Ilse', 12345, 'usuario'); 
insert into uinventario (nombre,contraseña,rol) values ('Meche', 12345, 'usuario'); 
insert into uinventario (nombre,contraseña,rol) values ('Roberto', 12345, 'usuario'); 
insert into uinventario (nombre,contraseña,rol) values ('Mario', 1234, 'admin'); 

