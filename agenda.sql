DROP DATABASE IF EXISTS agenda;
CREATE DATABASE IF NOT EXISTS agenda;
USE agenda;

CREATE TABLE categories(
	id_categories INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name_categories VARCHAR(30)
);


CREATE TABLE contacts(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_categories INT NOT NULL,
	name VARCHAR(150),
	phone VARCHAR(20),
	observations TEXT,
	FOREIGN KEY(id_categories) REFERENCES categories(id_categories)
);

CREATE TABLE categories(
	id_categories INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name_categories VARCHAR(30)
);

