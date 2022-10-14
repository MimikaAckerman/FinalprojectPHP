-- Database creation
DROP DATABASE IF EXISTS notes;
CREATE DATABASE IF NOT EXISTS notes;
<<<<<<< HEAD
DROP TABLE IF EXISTS note;
=======

>>>>>>> devJc
USE notes;

-- Creation of the tables

<<<<<<< HEAD
CREATE TABLE Notes(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(25),
content VARCHAR(25),
inital_date VARCHAR(25),
final_date VARCHAR(25) NOT NULL
);

CREATE TABLE Users(
=======
CREATE TABLE notes(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(25),
content VARCHAR(150),
initial_date VARCHAR(25),
final_date VARCHAR(25) NOT NULL
);

CREATE TABLE users(
>>>>>>> devJc
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(25),
last_name VARCHAR(25),
email VARCHAR(25) NOT NULL,
password VARCHAR(12) NOT NULL
);

<<<<<<< HEAD
CREATE TABLE Favourites(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(25) NOT NULL,
content VARCHAR(25) NOT NULL,
inital_date VARCHAR(25),
=======
CREATE TABLE favourites(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(25) NOT NULL,
content VARCHAR(150) NOT NULL,
initial_date VARCHAR(25),
>>>>>>> devJc
final_date VARCHAR(25)
);

-- Insert of data

<<<<<<< HEAD
INSERT INTO Notes (title, content, inital_date, final_date)
VALUES
("Audi", "RS6", 1984, 2022),
("Honda", "S2000", 1994, 2000);

INSERT INTO Users (`name`, last_name ,email, `password`)
VALUES
("Toyota", "YarisGR", "8573L@ll.com", 2022),
("Ford", "FocusRS", "9387J@kk.com", 2017);

INSERT INTO Favourites (title, content, inital_date, final_date)
VALUES
("Audi", "RS6", 1984, 2022),
("Honda", "S2000", 1994, 2000);
=======
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
>>>>>>> devJc
