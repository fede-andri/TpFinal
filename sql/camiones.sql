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
    tipo_licencia varchar(50),
    fecha_vencimiento varchar(10),
    email varchar(50),
    contraseña varchar(50),
    id_rol int,
    primary key(id_usuario),
    foreign key(id_rol) references rol(id_rol)
);

create table equipo_arrastre(
	id_arrastre int,
    patente varchar(20),
	primary key(id_arrastre)
);

create table vehiculo(
	id_vehiculo int auto_increment,
    patente varchar(10),
    nro_chasis int,
    modelo varchar(30),
    marca varchar(30),
    nro_motor int,
    kilometraje int,
    calendario_service varchar(30),
    año_fabricacion varchar(10),
    primary key(id_vehiculo)
);

create table mantenimiento(
	id_mantenimiento int,
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
    id_vehiculo int,
    primary key(id_carga),
    foreign key(id_vehiculo) references vehiculo(id_vehiculo)
);

create table cliente(
	id_cliente int,
    dni int,
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
    id_usuario int,
    id_cliente int,
    id_vehiculo int,
    id_arrastre int,
    primary key(id_viaje),
    foreign key(id_usuario) references usuario(id_usuario),
    foreign key(id_cliente) references cliente(id_cliente),
    foreign key(id_vehiculo) references vehiculo(id_vehiculo),
    foreign key(id_arrastre) references equipo_arrastre(id_arrastre)
);

INSERT INTO `camiones`.`rol` (`descripcion`) VALUES ('Administrador');
INSERT INTO `camiones`.`rol` (`descripcion`) VALUES ('Chofer');
INSERT INTO `camiones`.`rol` (`descripcion`) VALUES ('Mecanico');
INSERT INTO `camiones`.`rol` (`descripcion`) VALUES ('Supervisor');

INSERT INTO `camiones`.`usuario` (`nombre`, `apellido`, `dni`, `email`, `contraseña`, `id_rol`) VALUES ('Federico', 'Andrijasevich', '41391603', 'fede_andrijasevich@hotmail.com', md5('estudiantes'), '1');
