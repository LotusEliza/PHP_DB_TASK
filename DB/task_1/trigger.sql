DELIMITER $$

CREATE
	TRIGGER `books_after_delete` AFTER DELETE 
	ON `books` 
	FOR EACH ROW BEGIN
	
		INSERT INTO deleted_books(bookid, title, description, price) VALUES (OLD.bookid, OLD.title, OLD.description, OLD.price);
		
    END$$

DELIMITER ;


Создан триггер на удаление из таблицы books, который дублирует информацию о удаленной книге в табл. аудит - deleted_books.
В табл. orders указывается статус заказа. Пока заказ не оформлен статус - "корзина". После оформления заказа статус меняется на - "заказ в обработке" или другой необходимый статус.
