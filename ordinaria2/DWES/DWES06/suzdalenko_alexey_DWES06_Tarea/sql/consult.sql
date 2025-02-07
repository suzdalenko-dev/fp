DROP DATABASE IF EXISTS tarea6;
CREATE DATABASE IF NOT EXISTS tarea6;

USE tarea6;

CREATE USER 'gestor'@'%' IDENTIFIED BY 'secreto';
GRANT ALL PRIVILEGES ON *.* TO 'gestor'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;

CREATE TABLE IF NOT EXISTS producto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(50),
    nombre VARCHAR(100),
    descripcion TEXT,
    tienda_id INT,
    stock DECIMAL(11, 3)
);

CREATE TABLE IF NOT EXISTS tienda (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    telefono VARCHAR(20)
);

INSERT INTO tienda (nombre, telefono) VALUES
('Zara', '1234567890'),
('Bershka', '0987654321'),
('Lidl', '1122334455'),
('Lupa', '2233445566'),
('Mercadona', '3344556677'),
('Carrefour', '4455667788'),
('Primark', '5566778899'),
('Decathlon', '6677889900'),
('H&M', '7788990011'),
('Mango', '8899001122'),
('Aldi', '9900112233');


INSERT INTO producto (codigo, nombre, descripcion, tienda_id, stock) VALUES
-- Zara (Store ID: 1)
('P001', 'Camiseta básica', 'Camiseta de algodón 100% para uso diario', 1, 50.000),
('P002', 'Pantalón vaquero', 'Pantalón vaquero azul para hombre', 1, 30.000),
('P003', 'Chaqueta de cuero', 'Chaqueta de cuero para invierno', 1, 10.000),

-- Bershka (Store ID: 2)
('P004', 'Vestido de verano', 'Vestido bohemio con estampados florales', 2, 20.000),
('P005', 'Falda corta', 'Falda de algodón para uso casual', 2, 15.000),
('P006', 'Camiseta gráfica', 'Camiseta con estampado moderno', 2, 25.000),

-- Lidl (Store ID: 3)
('P007', 'Leche entera', 'Leche entera en envase de 1 litro', 3, 100.000),
('P008', 'Pan de molde', 'Pan de molde blanco sin corteza', 3, 80.000),
('P009', 'Chocolate negro', 'Tableta de chocolate negro 70%', 3, 50.000),

-- Lupa (Store ID: 4)
('P010', 'Manzana roja', 'Manzanas rojas frescas por kilo', 4, 150.000),
('P011', 'Aceite de oliva', 'Aceite de oliva virgen extra 1 litro', 4, 60.000),
('P012', 'Café molido', 'Paquete de café molido 250g', 4, 40.000),

-- Mercadona (Store ID: 5)
('P013', 'Arroz blanco', 'Arroz blanco de grano largo 1 kg', 5, 200.000),
('P014', 'Tomate frito', 'Tomate frito natural en bote de cristal', 5, 50.000),
('P015', 'Galletas integrales', 'Paquete de galletas integrales con avena', 5, 75.000),

-- Carrefour (Store ID: 6)
('P016', 'Detergente líquido', 'Detergente para ropa 3 litros', 6, 70.000),
('P017', 'Papel higiénico', 'Paquete de 12 rollos de papel higiénico', 6, 90.000),
('P018', 'Jabón de manos', 'Jabón líquido para manos con aroma a lavanda', 6, 100.000),

-- Primark (Store ID: 7)
('P019', 'Pijama mujer', 'Pijama de algodón con estampado', 7, 25.000),
('P020', 'Calcetines deportivos', 'Pack de 3 pares de calcetines deportivos', 7, 50.000),
('P021', 'Bufanda de lana', 'Bufanda de lana gruesa para invierno', 7, 15.000),

-- Decathlon (Store ID: 8)
('P022', 'Mochila trekking', 'Mochila de 30 litros para senderismo', 8, 10.000),
('P023', 'Botella térmica', 'Botella térmica para mantener líquidos calientes', 8, 35.000),
('P024', 'Zapatillas running', 'Zapatillas ligeras para correr', 8, 20.000),

-- H&M (Store ID: 9)
('P025', 'Camisa formal', 'Camisa blanca para ocasiones formales', 9, 40.000),
('P026', 'Vestido elegante', 'Vestido de noche elegante para mujer', 9, 10.000),
('P027', 'Abrigo de lana', 'Abrigo largo de lana para invierno', 9, 5.000),

-- Mango (Store ID: 10)
('P028', 'Bolso de mano', 'Bolso de mano elegante para mujer', 10, 12.000),
('P029', 'Cinturón de cuero', 'Cinturón de cuero marrón', 10, 25.000),
('P030', 'Blazer casual', 'Blazer casual para eventos formales', 10, 8.000),

-- Aldi (Store ID: 11)
('P031', 'Huevos camperos', 'Docena de huevos de gallinas camperas', 11, 80.000),
('P032', 'Cereal integral', 'Cereal integral con frutos secos', 11, 60.000),
('P033', 'Yogur natural', 'Pack de 6 yogures naturales', 11, 70.000);




SELECT * FROM tienda;

SELECT * FROM producto;