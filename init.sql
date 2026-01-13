CREATE DATABASE IF NOT EXISTS web_server;

USE web_server;

CREATE TABLE IF NOT EXISTS utenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO utenti (nome, email) VALUES
('Mario Rossi', 'test'),
('Luca Bianchi', 'test'),
('Giulia Verdi', 'test');
