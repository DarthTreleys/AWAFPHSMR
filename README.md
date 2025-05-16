# Proyecto de Aplicación Web para Automatizar y Facilitar Procesos de Hardening de Sistemas de Manera Remota (AWAFPHSMR)

Este proyecto ha sido desarrollado por estudiantes del Ciclo Formativo de Grado Superior en Administración de Sistemas Informáticos en Red (ASIX) - 2º curso.  
Consiste en una **aplicación web** diseñada para **automatizar scripts de hardening** dentro de un servidor Ubuntu.

## Requisitos Previos

Antes de ejecutar la aplicación, asegúrate de que tu servidor Ubuntu cuenta con los siguientes elementos instalados:

- **Ubuntu Server**
- **MySQL Server**
- **Apache2 Web Server**

## Requisitos previos

Antes de utilizar la aplicación, asegúrate de cumplir con los siguientes requisitos:

1. Tener un **servidor Ubuntu** con **MySQL** y **Apache2** instalados.
2. Crear una base de datos en MySQL llamada "ProjecteFinal" que contenga una tabla de usuarios con la siguiente estructura:

   ```sql
   CREATE DATABASE hardeningdb;
    ```sql
    USE hardeningdb;
```sql
CREATE TABLE USUARIS (
  ID_Usuari INT AUTO_INCREMENT PRIMARY KEY,
  User VARCHAR(50),
  Password VARCHAR(100)
);
