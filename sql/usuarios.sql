CREATE SCHEMA IF NOT EXISTS camiones;
USE camiones;

CREATE TABLE usuarios(id SMALLINT AUTO_INCREMENT PRIMARY KEY , email VARCHAR(80) NOT NULL ,
                      password VARCHAR(80) NOT NULL, rol VARCHAR(80), nombre VARCHAR (80), apellido VARCHAR(80));

INSERT INTO usuarios(email, password, rol, nombre, apellido)
     VALUES ('rodrigogarcia@gmail.com', '1234', 'Administrador', 'Rodrigo', 'Garcia'),
            ('federicoandrijasevich@gmail.com', '5678', 'Supervisor', 'Federico', 'Andrijasevich'),
            ('marianoandujar@gmail.com', '91011', 'Chofer','Mariano','Andujar' ),
            ('juansebastianveron@gmail.com','1213', 'Mecanico', 'Juan Sebastian', 'Veron' );