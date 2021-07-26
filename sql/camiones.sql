create database camiones;
use camiones;

create table rol(
	id_rol int auto_increment,
    descripcion varchar(30),
    primary key(id_rol)
);

create table usuario(
	id_usuario int auto_increment,
    nombre varchar(50),
    apellido varchar(50),
    dni int,
    cuil varchar(50),
    tipo_licencia varchar(50),
    fecha_vencimiento varchar(10),
    email varchar(50),
    password varchar(50),
    id_rol int,
    primary key(id_usuario),
    foreign key(id_rol) references rol(id_rol)
);

create table vehiculo(
	id_vehiculo int auto_increment,
    patente varchar(10),
    nro_chasis int,
    modelo varchar(30),
    marca varchar(30),
    kilometraje int,
    calendario_service varchar(30),
    año_fabricacion varchar(10),
    primary key(id_vehiculo)
);

create table acoplado(
                         id_acoplado int auto_increment,
                         tipo varchar(50),
                         id_vehiculo int,
                         primary key(id_acoplado),
                         foreign key (id_vehiculo) references vehiculo (id_vehiculo)
);

create table camion(
    id_camion int auto_increment,
    nro_motor int,
    id_vehiculo int,
    primary key(id_camion),
    foreign key (id_vehiculo) references vehiculo (id_vehiculo)
);

create table mantenimiento(
	id_mantenimiento int auto_increment,
    fecha_service varchar(11),
    costo int,
    service_interno varchar(100),
    service_externo varchar(100), /* Que es el serice externo e interno? */
    repuestos varchar(100),
    id_vehiculo int,
    id_mecanico int,
    primary key(id_mantenimiento),
    foreign key(id_mecanico) references usuario(id_usuario),
    foreign key(id_vehiculo) references vehiculo(id_vehiculo)
);

create table carga_combustible(
	id_carga int,
    lugar varchar(50),
    cantidad int,
    kilometros_unidad int,
    importe int,
    id_camion int,
    primary key(id_carga),
    foreign key(id_camion) references camion (id_camion)
);

create table cliente(
	id_cliente int,
    dni int,
    cuil varchar(50),
    nombre varchar(30),
    apellido varchar(40),
    calle varchar(50),
    nuero_calle int,
    localidad varchar(50),
    codigo_postal int,
    primary key(id_cliente)
);

create table viaje(
	id_viaje int auto_increment,
    origen varchar(50),
    destino varchar(50),
    tipo_carga varchar(50),
    fecha_salida varchar(11),
    fecha_llegada varchar(11),
    tiempo_estimado int,
    tiempo_real int,
    kilometros_previstos int,
    kilometros_reales int,
    cant_combustible_previsto int,
    cant_combustible_real int,
    primary key(id_viaje)

);

INSERT INTO `camiones`.`rol` (`descripcion`) VALUES ('Administrador');
INSERT INTO `camiones`.`rol` (`descripcion`) VALUES ('Chofer');
INSERT INTO `camiones`.`rol` (`descripcion`) VALUES ('Mecanico');
INSERT INTO `camiones`.`rol` (`descripcion`) VALUES ('Supervisor');

INSERT INTO `usuario` ('nombre', 'apellido', 'dni', 'cuil',  'email', 'password', 'id_rol') VALUES ('Victor', 'Guillin', '41391603', '20413916038' ,'administrador@gmail.com','1234', '1'),
                                                                                                                ('Jorge', 'Gomez', '33556998', '20335569986','supervisor@gmail.com','1234', '2'),
                                                                                                                ('oscar', 'Lopez', '30456225','20304562251','chofer@gmail.com','1234', '3'),
                                                                                                                ('ricardo', 'Gonzalez', '28122456','20281224568','mecanico@gmail.com','1234','4');
