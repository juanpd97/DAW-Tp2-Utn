CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cuit VARCHAR(50) UNIQUE NOT NULL,
    condicionIva VARCHAR(50) NOT NULL,
    razonSocial VARCHAR(100) NOT NULL,
    alta DATE NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
);
CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipoComprobante VARCHAR(50) NOT NULL,
    puntoVenta INT NOT NULL,
    numeroComprobante VARCHAR(50) NOT NULL,
    cuitCliente VARCHAR(50) NOT NULL,
    importe DECIMAL(10, 2) NOT NULL,
	fecha DATE DEFAULT NULL
);


-- datos de prueba para la tabla de clientes
INSERT INTO clientes (cuit, condicionIva, razonSocial, alta, direccion, email) VALUES 
('20345678901', 1, 'Juan Pérez Computación', '20230101', 'Av. Siempre Viva 123, Buenos Aires', 'juan.perez@example.com'),
('30456789012', 2, 'Empresa de Desarrollo SRL', '20220215', 'Belgrano 456, Córdoba', 'info@desarrollo.com'),
('27567890123', 3, 'María González', '20210330', 'San Martín 789, Rosario', 'maria.gonzalez@gmail.com'),
('33678901234', 4, 'Fundación Educativa', '20200412', 'Rivadavia 1100, Mendoza', 'contacto@fundacion.org'),
('24789012345', 5, 'Taller Mecánico Rodríguez', '20190525', 'Mitre 222, Santa Fe', 'taller@rodriguez.com.ar'),
('29890123456', 7, 'Transporte Regional', '20180607', 'Independencia 550, Tucumán', 'ventas@transporteregional.com'),
('23901234567', 1, 'Kiosco El Amigo', '20170718', 'Entre Ríos 33, La Plata', 'kiosco@amigo.com'),
('32012345678', 2, 'Importadora Global SA', '20160829', 'Corrientes 777, CABA', 'ventas@global.com.ar'),
('26123456789', 3, 'Carlos Martínez', '20150910', 'Sarmiento 444, Neuquén', 'carlos.martinez@hotmail.com'),
('35234567890', 4, 'Centro Cultural', '20140122', 'Brasil 666, Salta', 'info@centrocultural.org');

-- datos de prueba para la tabla de ventas
INSERT INTO ventas (tipoComprobante, puntoVenta, numeroComprobante, cuitCliente, importe, fecha) VALUES 
('FA', '0001', '00000001', 20345678901, 15500.75, '2024-01-15'),
('FB', '0002', '00000002', 30456789012, 7800.50, '2024-01-16'),
('NCA', '0001', '00000003', 27567890123, 3200.25, '2024-01-17'),
('NDA', '0003', '00000004', 33678901234, 12000.00, '2024-01-18'),
('NCB', '0002', '00000005', 24789012345, 5600.60, '2024-01-19'),
('NDB', '0001', '00000006', 29890123456, 9750.25, '2024-01-20'),
('FA', '0002', '00000007', 23901234567, 22000.00, '2024-01-21'),
('FB', '0003', '00000008', 32012345678, 6500.75, '2024-01-22'),
('NCA', '0001', '00000009', 26123456789, 4800.50, '2024-01-23'),
('NDA', '0002', '00000010', 35234567890, 18750.25, '2024-01-24');

-- --------------------
select * from ventas;
select * from clientes;