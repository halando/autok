

CREATE TABLE types(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	type VARCHAR(20)
);

CREATE TABLE colors(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	color VARCHAR(10)
);

CREATE TABLE cars(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(20),
	amount INTEGER,
	type_id INTEGER,
	color_id INTEGER,
	FOREIGN KEY ( type_id ) REFERENCES types( id ),
	FOREIGN KEY ( color_id ) REFERENCES colors( id )
);

INSERT INTO types (type) VALUES
( "kombi" ),
( "cabriolet" ),
( "sedan" ),
( "limuzin" ),
( "cabrio" ),
("kupé"),
("liftback"),
("roadster"),
("pickup"),
("suv"),
("crossover"),
("mpv");



INSERT INTO colors (color) VALUES
( "zöld" ),
( "kék" ),
( "fekete" ),
( "fehér" ),
( "piros" ),
( "barna" ),
( "narancssárga" ),
( "citromsárga" ),
( "rózsaszín" ),
( "lila" ),
( "szürke" ),
( "bordó" );

INSERT INTO cars ( name, amount, type_id, color_id ) VALUES
( "BMW", 2, 5, 1 ),
( "Dacia", 13, 4, 2 ),
( "Fiat", 30, 3, 12 ),
("Opel", 25, 6, 3 ),
( "Audi", 3, 2, 10 );
