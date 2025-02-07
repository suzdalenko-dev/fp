mysql -u root -p

DROP DATABASE IF EXISTS tarea6;
CREATE DATABASE IF NOT EXISTS tarea6;

USE tarea6;

CREATE USER 'gestor'@'%' IDENTIFIED BY 'secreto';
GRANT ALL PRIVILEGES ON *.* TO 'gestor'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;

SELECT User, Host FROM mysql.user;

CREATE TABLE IF NOT EXISTS producto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(50),
    nombre VARCHAR(100),
    descripcion TEXT,
    tienda_id INT,
    stock DECIMAL(11, 3)
);

DESCRIBE producto;

CREATE TABLE IF NOT EXISTS tienda (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    telefono VARCHAR(20)
);

ALTER TABLE tienda ADD COLUMN address VARCHAR(222);
ALTER TABLE tienda MODIFY COLUMN address TEXT;
ALTER TABLE tienda DROP COLUMN address;


DESCRIBE tienda;

SHOW DATABASES;
SHOW TABLES;


-- execute file complete: mysql -u root -p < C:\xampp1\htdocs\sql\consult.sql
-- OR
-- SOURCE C:/xampp1/htdocs/sql/consult.sql;
