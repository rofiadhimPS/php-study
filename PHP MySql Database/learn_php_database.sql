CREATE TABLE customers
(
    id VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
 ) ENGINE = InnoDB;

 SHOW TABLES;

 SELECT * FROM customers;

CREATE TABLE admin (
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (username)
) ENGINE = InnoDB;

 SELECT * FROM admin;

INSERT INTO admin(username, password) VALUES ('admin', 'admin123');

INSERT INTO admin(username, password) VALUES ('adhim', 'adhim123');

CREATE TABLE comment (
    id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL,
    comment TEXT,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

SELECT * FROM comment;

