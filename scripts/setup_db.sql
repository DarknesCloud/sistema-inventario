/* Fichero para crear la Base de Datos, y el usuario de la aplicación 
 * Ejecutar como root en MySQL. 
 *
 * Autor: Yoel Monsalve.
 * Fecha: Febrero, 2021.
 * Modificado: Julio, 2021.
 */

CREATE DATABASE IF NOT EXISTS `u279387406_eb_v1_0_2`;

/* crear el usuario, y darle privilegios LIMITADOS */

# Para MySQL, descomentar esta linea y comentar la 16
#CREATE USER IF NOT EXISTS 'u279387406_eb_admin'@'localhost' IDENTIFIED WITH mysql_native_password BY 'admin';
# Para MariaDB, descomentar esta linea y comentar la 14
CREATE USER IF NOT EXISTS 'u279387406_eb_admin'@'localhost' IDENTIFIED BY 'admin';

GRANT SELECT, INSERT, UPDATE, DELETE, LOCK TABLES ON `u279387406_eb_v1_0_2`.* TO 'u279387406_eb_admin'@'localhost';
FLUSH PRIVILEGES;

