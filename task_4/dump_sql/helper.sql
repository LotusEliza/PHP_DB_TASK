<<<<<<< HEAD:task_4/dump_sql/in (2).sql
CREATE TABLE user3 (
id INT(6)  AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
pwd VARCHAR(30) NOT NULL,
email VARCHAR(50)
=======
CREATE TABLE task2 (
id INT NOT NULL,
name VARCHAR(255) NOT NULL,
description TEXT NOT NULL
>>>>>>> c5caf91001dcb8547cf72b66740a7c1115e13fa5:task_4/dump_sql/helper.sql
);


INSERT INTO user (name,  pwd, email)
VALUES
('John',  '412314', 'john@example.com'),
('Sam',  '412rf4', 'Sam@example.com'),
('Anna',  '412314', 'john@example.com'),
('Rory',  '412314', 'Rory@example.com'),
('Ray',  '412314', 'Ray@example.com');


-- psql
CREATE TABLE user3 (
id SERIAL PRIMARY KEY,
name VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
age INT
);

INSERT INTO user3 (id,name,city,age) VALUES (1, 'Paul', 'California', 32 );



INSERT INTO userss (id, name,  pwd, email)
VALUES
(1, 'John',  '412314', 'john@example.com'),
(2, 'Sam',  '412rf4', 'Sam@example.com'),
(3, 'Anna',  '412314', 'john@example.com'),
(4, 'Rory',  '412314', 'Rory@example.com'),
(5, 'Ray',  '412314', 'Ray@example.com');
