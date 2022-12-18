DROP DATABASE super_market;
CREATE DATABASE super_market;

ALTER DATABASE super_market CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci; 

CREATE TABLE super_market.Product_category (
   code varchar(100) NOT NULL,
   description varchar(255) NOT NULL,
   PRIMARY KEY (code)
); 

CREATE TABLE super_market.Product_subcategory (
    code varchar(100) NOT NULL,
    description varchar(255) NOT NULL,
    category varchar(100) NOT NULL,
    FOREIGN KEY (category) REFERENCES Product_category(code),
    PRIMARY KEY (code)
); 

CREATE TABLE super_market.Product (
    code varchar(100) NOT NULL,
    picture varchar(100) NOT NULL,
    description varchar(255) NOT NULL,
    subcategory varchar(100) NOT NULL,
    FOREIGN KEY (subcategory) REFERENCES Product_subcategory(code),
    PRIMARY KEY (code)
); 

CREATE TABLE super_market.Super_market_brand (
    code varchar(100) NOT NULL,
    name varchar(255) NOT NULL,
    PRIMARY KEY (code)
); 

CREATE TABLE super_market.Super_market_branch (
    code varchar(100) NOT NULL,
    name varchar(255) NOT NULL,
    city varchar(255) NOT NULL,
    postal_code int NOT NULL,
    telephone_no int NOT NULL,
    email varchar(255) NOT NULL,
    brand varchar(100) NOT NULL,
    FOREIGN KEY (brand) REFERENCES Super_market_brand(code),
    PRIMARY KEY (code)
); 

CREATE TABLE super_market.Product_price_per_brand (
    product varchar(100) NOT NULL,
    brand varchar(100) NOT NULL,
    price decimal(10,2) NOT NULL,
    FOREIGN KEY (product) REFERENCES Product(code),
    FOREIGN KEY (brand) REFERENCES Super_market_brand(code),
    UNIQUE (product,brand)
);

CREATE TABLE super_market.Users (
    username varchar(200) NOT NULL,
    password varchar(200) NOT NULL,
    PRIMARY KEY (username)
); 