
CREATE TABLE customers (
  customerID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  customerName VARCHAR(255) DEFAULT NULL);

INSERT INTO `customers` (`customerName`) VALUES
('Liza'),
('Anna'),
('Stiven'),
('Max'),
('Dan'),
('Nika');

CREATE TABLE `orders` (
  `orderID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `customerID` int(11) DEFAULT NULL,
  `description` varchar(100) NOT NULL
);

INSERT INTO `orders` (`customerID`, `description`) VALUES
(4, '\'dog\''),
(5, 'ball'),
(NULL, 'ball'),
(1, '\'ball\''),
(4, '\'cat\''),
(4, '\'cat\'');

----------------------------------------PG------------------------------------------------
CREATE TABLE customers (
customerID SERIAL PRIMARY KEY,
customerName VARCHAR(30) NOT NULL
);

CREATE TABLE orders (
orderID SERIAL PRIMARY KEY,
customerID INT DEFAULT NULL,
description VARCHAR(30) DEFAULT NULL
);

INSERT INTO customers (customerName) VALUES
('Liza'),
('Anna'),
('Stiven'),
('Max'),
('Dan'),
('Nika');

INSERT INTO orders (customerID, description) VALUES (4, 'dog');
INSERT INTO orders (customerID, description) VALUES (5, 'ball');
INSERT INTO orders (customerID, description) VALUES (1, 'ball');
INSERT INTO orders (customerID, description) VALUES (4, 'cat');
INSERT INTO orders (customerID, description) VALUES (4, 'cat');
