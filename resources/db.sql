-- Database creation
DROP DATABASE IF EXISTS todoList;
CREATE DATABASE IF NOT EXISTS todoList;
USE todoList;

-- Creation of the tables

CREATE TABLE notes(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(25),
content VARCHAR(150),
initial_date VARCHAR(25),
final_date VARCHAR(25) NOT NULL
);

CREATE TABLE users(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(25),
last_name VARCHAR(25),
email VARCHAR(25) NOT NULL,
password VARCHAR(12) NOT NULL
);

CREATE TABLE favourites(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(25) NOT NULL,
content VARCHAR(150) NOT NULL,
initial_date VARCHAR(25),
final_date VARCHAR(25)
);

-- Insert of data

INSERT INTO notes (title, content, initial_date, final_date)
VALUES
("Today", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "20-12-2020", "20-12-2020"),
("Task", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "15-01-2022", "15-01-2022"),
("Weekend", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "15-01-2022", "15-01-2022");

INSERT INTO users (`name`, last_name ,email, `password`)
VALUES
("Lara", "Amat", "LaraAmat@gmail.com", 123456),
("Alexis", "Fuster", "AlexisFuster@hotmail.com", 123456),
("Aitor", "Novoa", "AitorNovoa@gmail.com", 123456),
("Nerea", "Vergara", "NereaVergara@gmail.com", 123456),
("Bruno", "Perea", "BrunoPerea@hotmail.com", 123456);

INSERT INTO favourites (title, content, initial_date, final_date)
VALUES
("Today", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "20-12-2020", "20-12-2020"),
("Task", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "15-01-2022", "15-01-2022"),
("Weekend", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "15-01-2022", "15-01-2022");
