CREATE DATABASE IF NOT EXISTS team5docker;
USE team5docker;

CREATE TABLE IF NOT EXISTS team5 (
    petID VARCHAR(32) PRIMARY KEY,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    dogSpecies VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

INSERT INTO team5 VALUES 
('2232194','Heart','Langub','Pug','1.00'),
('2232491','Marshall','Marcelo','Chihuahua','1696800.00'),
('2232521','Kurt','Dela Cruz','Bulldog','150.00'),
('2232533','Mark','Dela Cruz','Shih Tzu','500.50'),
('2234078','Rory','Raras','Dobermann','14069.50');
