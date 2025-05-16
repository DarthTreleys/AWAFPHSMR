# Proyecto de Aplicación Web para Automatizar y Facilitar Procesos de Hardening de Sistemas de Manera Remota (AWAFPHSMR)

Este proyecto ha sido desarrollado por estudiantes del Ciclo Formativo de Grado Superior en Administración de Sistemas Informáticos en Red (ASIX) - 2º curso.  
Consiste en una **aplicación web** diseñada para **automatizar scripts de hardening** dentro de un servidor Ubuntu.

## Requisitos previos

Antes de utilizar la aplicación, asegúrate de cumplir con los siguientes requisitos:

1. Tener un **servidor Ubuntu** con **MySQL** y **Apache2** instalados.
2. Crear una base de datos en MySQL llamada "ProjecteFinal" que contenga una tabla de usuarios con la siguiente estructura:

   ```sql
      CREATE DATABASE ProjecteFinal;
       USE ProjecteFinal;
   
   CREATE TABLE USUARIS (
     ID_Usuari INT AUTO_INCREMENT PRIMARY KEY,
     User VARCHAR(50),
     Password VARCHAR(100)
   );
## Instalación de la aplicación
3. Mover todos los archivos del proyecto a la carpeta /var/www/html
   ```bash
   sudo mv [NOMBRE_DEL_FICHERO] /var/www/html/
4. Añadir el usuario www-data al archivo sudoers
   ```bash
   sudo visudo
   www-data ALL=(ALL) NOPASSWD: ALL
5. Dar permisos SUID a los scripts Python
   ```bash
   sudo chmod u+s /var/www/html/actus.py
   sudo chmod u+s /var/www/html/backup.py
   #Repetir para todos los scripts necesarios

6. Acceder desde un navegador
```cpp
   http://[IP_DEL_SERVIDOR]/
