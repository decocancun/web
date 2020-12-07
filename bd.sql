CREATE DATABASE IF NOT EXISTS zdweb;
USE zdweb;

CREATE TABLE IF NOT EXISTS usuario(
    id                  int(255) auto_increment NOT null,
    nombre              varchar(100),
    correo              varchar(200),
    telefono            varchar(20),
    evento              varchar(50),
    fecha               datetime,
    mensaje             text,

    CONSTRAINT pk_usuario PRIMARY KEY(id)
)ENGINE=InnoDB;
