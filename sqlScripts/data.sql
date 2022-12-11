-- Product Categories
INSERT INTO Product_category (code, description) VALUES ('Food','Τρόφιμα');
INSERT INTO Product_category (code, description) VALUES ('Cleaners','Καθαριστικά');

-- Product Subcategories
INSERT INTO Product_subcategory (code,description,category) VALUES ('Dairy_products','Γαλακτομικά','Food');
INSERT INTO Product_subcategory (code,description,category) VALUES ('Fruits','Φρούτα','Food');

-- Products
-- Milk
INSERT INTO Product (code,picture,description,subcategory) VALUES 
                    ('EVGA_MILK','EVGA_MILK.jpeg','Γάλα ΕΒΓΑ','Dairy_products');
INSERT INTO Product (code,picture,description,subcategory) VALUES 
                    ('DELTA_MILK','DELTA_MILK.jpeg','Γάλα ΔΕΛΤΑ','Dairy_products');
INSERT INTO Product (code,picture,description,subcategory) VALUES 
                    ('AB_MILK','AB_MILK.jpeg','Γάλα AB','Dairy_products');
INSERT INTO Product (code,picture,description,subcategory) VALUES 
                    ('SKLAVENITIS_MILK','SKLAVENITIS_MILK.jpg','Γάλα Σκλαβενίτης','Dairy_products');
INSERT INTO Product (code,picture,description,subcategory) VALUES 
                    ('MY_MARKET_MILK','MY_MARKET_MILK.jpg','Γάλα My Market','Dairy_products');

-- Fruit
INSERT INTO Product (code,picture,description,subcategory) VALUES 
                    ('RED_APPLE','RED_APPLE.jpeg','Κόκκινο μήλο','Fruits');



-- Brands
INSERT INTO Super_market_brand  (code, name) VALUES ('SKLAVENITIS','Σκλαβενίτης');
INSERT INTO Super_market_brand  (code, name) VALUES ('MY_MARKET','My Market');
INSERT INTO Super_market_brand  (code, name) VALUES ('AB','ΑΒ Βασιλόπουλος');

-- Branches 
INSERT INTO Super_market_branch (code, name, city, postal_code, telephone_no, email, brand ) 
VALUES ('AB_1','ΑΒ Βασιλόπουλος ΥΚ-1','Γαλάτσι, Καραισκάκη 82','11146',2102912345,'ab.galatsi.1@ab.com', 'AB');
INSERT INTO Super_market_branch (code, name, city, postal_code, telephone_no, email, brand) 
VALUES ('AB_2','ΑΒ Βασιλόπουλος ΥΚ-2','Γαλατσίου 67','11147',2102912346,'ab.galatsi.2@ab.com','AB');
INSERT INTO Super_market_branch (code, name, city, postal_code, telephone_no, email, brand) 
VALUES ('AB_3','ΑΒ Βασιλόπουλος ΥΚ-3','Βεϊκου 34','11145',2102912347,'ab.galatsi.3@ab.com','AB');

INSERT INTO Super_market_branch (code, name, city, postal_code, telephone_no, email, brand ) 
VALUES ('MY_MARKET_1','My Market ΥΚ-1','Γαλάτσι, Καραισκάκη 12','11146',2102912345,'my_market_1@ab.com', 'MY_MARKET');
INSERT INTO Super_market_branch (code, name, city, postal_code, telephone_no, email, brand) 
VALUES ('MY_MARKET_2','My Market ΥΚ-2','Γαλατσίου 31','11147',2102912346,'my_market_2@ab.com','MY_MARKET');
INSERT INTO Super_market_branch (code, name, city, postal_code, telephone_no, email, brand) 
VALUES ('MY_MARKET_3','My Market ΥΚ-3','Βεϊκου 92','11145',2102912347,'my_market_3@ab.com','MY_MARKET');

INSERT INTO Super_market_branch (code, name, city, postal_code, telephone_no, email, brand ) 
VALUES ('SKLAVENITIS_1','Σκλαβενίτης ΥΚ-1','Γαλάτσι, Καραισκάκη 12','11146',2102912345,'sklavenitis_1@ab.com', 'SKLAVENITIS');
INSERT INTO Super_market_branch (code, name, city, postal_code, telephone_no, email, brand) 
VALUES ('SKLAVENITIS_2','Σκλαβενίτης ΥΚ-2','Γαλατσίου 31','11147',2102912346,'sklavenitis_2@ab.com','SKLAVENITIS');
INSERT INTO Super_market_branch (code, name, city, postal_code, telephone_no, email, brand) 
VALUES ('SKLAVENITIS_3','Σκλαβενίτης ΥΚ-3','Βεϊκου 92','11145',2102912347,'sklavenitis_3@ab.com','SKLAVENITIS');

-- Price per brand
INSERT INTO Product_price_per_brand (product,brand,price) VALUES ('AB_MILK','AB', 1.15);
INSERT INTO Product_price_per_brand (product,brand,price) VALUES ('DELTA_MILK','AB', 1.60);
INSERT INTO Product_price_per_brand (product,brand,price) VALUES ('DELTA_MILK','SKLAVENITIS', 1.65);
INSERT INTO Product_price_per_brand (product,brand,price) VALUES ('DELTA_MILK','MY_MARKET', 1.55);
INSERT INTO Product_price_per_brand (product,brand,price) VALUES ('RED_APPLE','MY_MARKET', 0.95);
INSERT INTO Product_price_per_brand (product,brand,price) VALUES ('RED_APPLE','SKLAVENITIS', 0.90);