# Proyecto de Aplicación Web para Automatizar y Facilitar Procesos de Hardening de Sistemas de Manera Remota (AWAFPHSMR)

Este proyecto ha sido desarrollado por estudiantes del Ciclo Formativo de Grado Superior en Administración de Sistemas Informáticos en Red (ASIX) - 2º curso.  
Consiste en una **aplicación web** diseñada para **automatizar scripts de hardening** dentro de un servidor Ubuntu.

## Requisitos previos

Antes de utilizar la aplicación, asegúrate de cumplir con los siguientes requisitos:

1. Debe tener un **servidor Ubuntu** con **MySQL** y **Apache2** instalados.
2. Debe crear una base de datos en MySQL llamada "ProjecteFinal" que contenga una tabla de usuarios con la siguiente estructura:

   ```sql
   CREATE DATABASE ProjecteFinal;
       USE ProjecteFinal;
   
   CREATE TABLE USUARIS (
     ID_Usuari INT AUTO_INCREMENT PRIMARY KEY,
     User VARCHAR(50),
     Password VARCHAR(100)
   );
## Instalación de la aplicación
3. Mueva todos los archivos del proyecto a la carpeta /var/www/html
   ```bash
   sudo mv [NOMBRE_DEL_FICHERO] /var/www/html/
4. Añada el usuario www-data al archivo sudoers
   ```bash
   sudo visudo
   www-data ALL=(ALL) NOPASSWD: ALL
5. De permisos SUID a los scripts Python
   ```bash
   sudo chmod u+s /var/www/html/actus.py
   sudo chmod u+s /var/www/html/backup.py
   #Repetir para todos los scripts necesarios

6. Acceda desde un navegador
   ```cpp
   http://[IP_DEL_SERVIDOR]/

7. Cree un usuario  dentro de la base de datos mediante los siguientes métodos para poder iniciar sesión:
   ```sql
   INSERT INTO USUARIS (User, Password) VALUES ('NOMBREUSUARIO', 'CONTRASEÑAUSUARIO');
9. Una vez dentro se presentará esta interfaz:
![image](https://github.com/user-attachments/assets/bb92b60c-a931-44f1-a1c0-db52f756d0cd)
Dentro del índice lateral aparecerá una lista de comandos a ejecutar:

   ![image](https://github.com/user-attachments/assets/7de3d7cb-5211-41dc-a450-f1db967bd5d2)

   En dicha lista, al seleccionar una de las categorías, se rederigirá automátimaticamente a la plana donde se ejecutará el script seleccionado:

   En esta plana se realizarán los backups.
   ![image](https://github.com/user-attachments/assets/68772389-e216-404f-8c9a-7f152f2a8ef8)

   En esta plana se eliminarán los archivos temporales.
   ![image](https://github.com/user-attachments/assets/8329ed67-703a-4625-8c61-fb21e9c8aca4)

   En esta plana se organizarán los ficheros según su formato.
   ![image](https://github.com/user-attachments/assets/6b51a092-93d5-414f-a67d-b3530fd82f14)

   En esta plana se monitorizará el estado del servidor.
   ![image](https://github.com/user-attachments/assets/84705c34-0bcc-4394-b34a-849397b30c58)

   En esta plana se crearán puntos de restauración en una unidad externa.
   ![image](https://github.com/user-attachments/assets/86cbd129-264a-4ad2-98d6-8d0b24944004)

   Esta plana permitirá crear nuevos usuarios sin necesidad de hacer inserciones dentro de la base de datos de manera manual:
   ![image](https://github.com/user-attachments/assets/84573c0c-31dd-44a1-81ef-ae7554f0de25)

11. Dicho todo esto, ya tiene todo el conocimiento para poder configurar y ejecutar nuestra aplicación web en su servidor de Ubuntu, si tiene alguna duda, no dude en ponerse en contacto con cualquiera de los autores de este proyecto a través de Github.




