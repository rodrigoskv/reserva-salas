-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS reserva_salas CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE reserva_salas;

-- Tabela: users
DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) NOT NULL DEFAULT 'user'
);

-- Inserindo usuário admin (senha: 123)
INSERT INTO users (name, email, password, role) VALUES

('Admin', 'admin@example.com', '$2y$10$5P/8eIkUEDlDDxwBDQW53Owbf7ohvi8J9KDzna.u2u5LgSKwj4Prq', 'admin');

-- Tabela: rooms
DROP TABLE IF EXISTS rooms;
CREATE TABLE rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    capacity INT NOT NULL
);

-- Inserindo salas iniciais
INSERT INTO rooms (name, capacity) VALUES
('Laboratório de Informática 1', 30),
('Laboratório de Informática 2', 30),
('Laboratório de Informática 3', 30),
('Laboratório de Informática 4', 30),
('Laboratório de Informática 5', 30),
('Auditório A', 100),
('Auditório B', 120),
('Sala A1', 20),
('Sala A2', 25),
('Sala A3', 30),
('Sala B1', 20),
('Sala B2', 25),
('Sala B3', 30),
('Sala C1', 20),
('Sala C2', 25),
('Sala C3', 30);

-- Tabela: reservations
DROP TABLE IF EXISTS reservations;
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    room_id INT NOT NULL,
    date DATE NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (room_id) REFERENCES rooms(id) ON DELETE CASCADE
);

-- Inserindo uma reserva inicial (amanhã, 09:00–10:00)
INSERT INTO reservations (user_id, room_id, date, start_time, end_time) VALUES
(1, 1, CURDATE() + INTERVAL 1 DAY, '09:00:00', '10:00:00'),
(1, 2, CURDATE() + INTERVAL 2 DAY, '10:00:00', '11:00:00'),
(1, 3, CURDATE() + INTERVAL 3 DAY, '14:00:00', '15:30:00'),
(1, 4, CURDATE() + INTERVAL 4 DAY, '08:00:00', '09:30:00'),
(1, 5, CURDATE() + INTERVAL 5 DAY, '13:00:00', '14:00:00'),
(1, 6, CURDATE() + INTERVAL 6 DAY, '15:00:00', '17:00:00'),
(1, 7, CURDATE() + INTERVAL 7 DAY, '10:00:00', '12:00:00'),
(1, 8, CURDATE() + INTERVAL 8 DAY, '07:30:00', '08:30:00'),
(1, 9, CURDATE() + INTERVAL 9 DAY, '09:00:00', '10:00:00'),
(1, 10, CURDATE() + INTERVAL 10 DAY, '11:00:00', '12:00:00');


-- Exemplo de outro usuário promovido manualmente
-- UPDATE users SET role = 'admin' WHERE email = 'teste@teste.com';
-- update users set password = '$2y$10$5P/8eIkUEDlDDxwBDQW53Owbf7ohvi8J9KDzna.u2u5LgSKwj4Prq' where email = 'admin@example.com';
