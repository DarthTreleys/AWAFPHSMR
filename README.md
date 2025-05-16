# Proyecto de Aplicación Web para Automatizar y Facilitar Procesos de Hardening de Sistemas de Manera Remota (AWAFPHSMR)

Este proyecto ha sido desarrollado por estudiantes del Ciclo Formativo de Grado Superior en Administración de Sistemas Informáticos en Red (ASIX) - 2º curso.  
Consiste en una **aplicación web** diseñada para **automatizar scripts de hardening** dentro de un servidor Ubuntu.

## Requisitos Previos

Antes de ejecutar la aplicación, asegúrate de que tu servidor Ubuntu cuenta con los siguientes elementos instalados:

- **Ubuntu Server**
- **MySQL Server**
- **Apache2 Web Server**

## Preparación de la Base de Datos

1. Accede al gestor de base de datos MySQL.
2. Crea una base de datos para el proyecto (puede llamarse, por ejemplo, `hardening_db`).
3. Dentro de dicha base de datos, crea la tabla de usuarios con la siguiente estructura inicial:

```sql
CREATE TABLE USUARIS (
  ID_Usuari INT AUTO_INCREMENT PRIMARY KEY,
  User VARCHAR(50),
  Password VARCHAR(100)
);
