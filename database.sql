CREATE DATABASE gestion_produits;

USE gestion_produits;

CREATE TABLE produits (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nom VARCHAR(100),
 categorie VARCHAR(100),
 description TEXT,
 prix INT,
 quantite INT
);

INSERT INTO categories(nom) VALUES
('Informatique'),
('Téléphones'),
('Électroménager'),
('Accessoires'),
('Autres');