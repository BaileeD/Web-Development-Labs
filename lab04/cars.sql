CREATE TABLE cars(
  car_id 		int(11) NOT NULL AUTO_INCREMENT,
  make 			varchar(50) DEFAULT NULL,
  model 		varchar(50) DEFAULT NULL,
  price 		decimal(8,0) DEFAULT NULL,
  yom 			int(4) DEFAULT NULL,
  CONSTRAINT car_id-_pk PRIMARY KEY (car_id)
)

INSERT into cars VALUES (
	(1, 'Holden', 'Astra', 14000, 2005),
	(2, 'BMW', 'X3', 35000, 2004),
	(3, 'Ford', 'Falcon', 39000, 2010),
	(4, 'Toyota', 'Corolla', 20000, 2010),
	(5, 'Holden', 'Commodore', 13500, 2005),
	(6, 'Holden', 'Astra', 8000, 2001),
	(7, 'Holden', 'Commodore', 28000, 2009),
	(8, 'Ford', 'Falcon', 14000, 2006),
	(9, 'Ford', 'Falcon', 7000, 2003),
	(10, 'Ford', 'Laser', 10000, 2001),
	(11, 'Mazda', 'RX-7', 26000, 2000),
	(12, 'Toyota', 'Corolla', 12000, 2001),
	(13, 'Mazda', '3', 14500, 2007));

SELECT * FROM cars;
SELECT make, model, price FROM cars ORDER BY make, model;
SELECT make, model FROM cars, WHERE price > 20000;
SELECT make, model FROM cars WHERE price < 15000;
SELECT make, model, AVG(price) FROM cars GROUP BY model;
