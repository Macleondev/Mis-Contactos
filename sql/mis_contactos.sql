/*
Comentario en sql
SQL: Structure Query Language - Lenguaje Estructurado de Consulta

Base de Datos: Una colección de datos que están organizados.

Gestores o Manejadores de BD son los programas que nos permiten administrar los datos

Ejemplo de Gestores de BD: Microsoft Access, Microsoft SQL Server, ORACLE, Informix, DBASE, SQL Lite, PostgresSQL, MySQL

Una sentencia SQL es una linea de código para trabajar con nuestro BD

Existen 2 tipos de sentencias SQL:
1) Sentencias Estructurales: Son las que nos permitirán crear, modificar o eliminar objetos, usuarios, y propiedades de nuestra BD
2)Sentencias de Datos: Son las que nos permitirán insertar, eliminar, modificar y buscar información en nuestra BD

FULLTEXT KEY hace de buscador, es una algoritmo que busca un registro

En MySQL existen 2 tipos de engine para tablas:
1)MyISAM: Son tablas planas,son como si fueran a trabajar datos en Excel
2)InnoDB: Son tablas relacionales, son como si fuera a trabajar datos en Access
-- */

CREATE DATABASE mis_contactos;

USE mis_contactos;

CREATE TABLE contactos (
  email VARCHAR(50) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  sexo CHAR(1),
  nacimiento DATE,
  telefono VARCHAR(13),
  pais VARCHAR(50) NOT NULL,
  imagen VARCHAR(50),
  PRIMARY KEY(email),
  FULLTEXT KEY buscador(email, nombre, sexo, telefono, pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE pais (
  id_pais INT NOT NULL AUTO_INCREMENT,
  pais VARCHAR(50) NOT NULL,
  PRIMARY KEY(id_pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pais (id_pais, pais) value 
      (1, "Peru"),
      (2, "Mexico"),
      (3,"Colombia"),
      (4, "Guatemala"),
      (5, "España"),
      (6 , "Brasil"),
      (7, "Uruguay"),
      (8, "Argentina"),
      (9, "Chile"),
      (10 ,"Paraguay"),
      (11, "Honduras"),
      (12, "El Salvador"),
      (13, "Nicaragua"),
      (14, "Costa Rica"),
      (15, "Panama"),
      (16, "Venezuela"),
      (17, "Ecuador"),
      (18, "Bolivia"),
      (19, "Canada"),
      (20, "Estados Unidos"),
      (21, "Groenlandia"),
      (22, "Republica Dominicana"),
      (23, "Haiti"),
      (24, "Cuba"),
      (25, "Belice"),
      (26, "Inglaterra"),
      (27, "Francia"),
      (28, "Alemania"),
      (29, "Italia"),
      (30, "Japón"),
      (31, "China"),
      (32, "Egipto"),
      (33, "Sudáfrica"),
      (34, "Australia"),
      (35, "Nueva Zelanda");