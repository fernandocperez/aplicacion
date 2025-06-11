DROP DATABASE IF EXISTS inventario;
CREATE DATABASE inventario
    DEFAULT CHARACTER SET = 'utf8mb4';
USE inventario;
CREATE TABLE ubicacion ( 
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    aula VARCHAR(20),
    descripcion VARCHAR(200)    

);

CREATE TABLE ordenadores( 
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    marca VARCHAR(100),
    modelo VARCHAR(100),
    estado VARCHAR(500),
    formato_anio YEAR,
    id_ubi int,
    CONSTRAINT chk_anio CHECK (formato_anio <= YEAR(CURDATE())),
    FOREIGN KEY (id_ubi) REFERENCES ubicacion(id)
);

INSERT INTO ubicacion (id, aula, descripcion) VALUES
(1, 'Aula 101', 'Armario A1'),
(2, 'Aula 102', 'Armario A2'),
(3, 'Aula 103', 'Armario A3');
INSERT INTO  ordenadores (id,marca,modelo,estado,formato_anio,id_ubi) VALUES
(1, 'HP', 'ProBook 450 G5', 'En uso', 2018,1),
(2, 'Dell', 'Latitude 5400', 'En reparación', 2020,1),
(3, 'Lenovo', 'ThinkPad T490', '', '2024',2);



