INSERT INTO Product_category (code, description) VALUES ('Food','Τρόφιμα');
INSERT INTO Product_category (code, description) VALUES ('Cleaners','Καθαριστικά');
INSERT INTO Product_subcategory (code,description,category) VALUES ('Dairy_products','Γαλακτομικά','Food');
INSERT INTO Super_market_brand  (code, name) VALUES ('SKLAVENITIS','Σκλαβενίτης');
INSERT INTO Super_market_brand  (code, name) VALUES ('MY_MARKET','My Market');
INSERT INTO Super_market_brand  (code, name) VALUES ('AB','ΑΒ Βασιλόπουλος');

INSERT INTO Super_market_branch (code, name, address, postal_code, telephone_no, email, brand ) 
VALUES ('AB_GALATSI_1','ΑΒ Βασιλόπουλος Γαλάτσι ΥΚ-1','Γαλάτσι, Καραισκάκη 82','11146',2102912345,'ab.galatsi.1@ab.com', 'AB');
INSERT INTO Super_market_branch (code, name, address, postal_code, telephone_no, email, brand) 
VALUES ('AB_GALATSI_2','ΑΒ Βασιλόπουλος Γαλάτσι ΥΚ-2','Γαλατσίου 67','11147',2102912346,'ab.galatsi.2@ab.com','AB');
INSERT INTO Super_market_branch (code, name, address, postal_code, telephone_no, email, brand) 
VALUES ('AB_GALATSI_3','ΑΒ Βασιλόπουλος Γαλάτσι ΥΚ-3','Βεϊκου 34','11145',2102912347,'ab.galatsi.3@ab.com','AB');