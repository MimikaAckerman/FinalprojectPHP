-- Database creation
DROP DATABASE IF EXISTS notes;
CREATE DATABASE IF NOT EXISTS notes;
DROP TABLE IF EXISTS note;
USE notes;

-- Creation of the tables

CREATE TABLE Notes(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(25),
content VARCHAR(25),
inital_date VARCHAR(25),
final_date VARCHAR(25) NOT NULL
);

CREATE TABLE Users(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(25),
last_name VARCHAR(25),
email VARCHAR(25),
password VARCHAR(12) NOT NULL
);

-- Insert of data

INSERT INTO Notes (title, content, inital_date, final_date)
VALUES
("Audi", "RS6", 1984, 2022),
("Honda", "S2000", 1994, 2000);

INSERT INTO Users (/`name/`, last_name ,email, /`password/`)
VALUES
("Toyota", "YarisGR", "8573L@ll.com", 2022),
("Ford", "FocusRS", "9387J@kk.com", 2017);