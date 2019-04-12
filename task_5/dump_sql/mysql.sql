
CREATE TABLE `try` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `try` (`id`, `name`) VALUES
                                        (5, 'Test'),
                                        (6, 'Test'),
                                        (7, 'Test'),
                                        (8, 'Test'),
                                        (9, 'Test');

ALTER TABLE `try`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `try`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
