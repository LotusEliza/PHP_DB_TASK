
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

