 CREATE TABLE products (id INT NOT NULL ,category_id INT NOT NULL, category_name TEXT NOT NULL, product_name TEXT NOT NULL, subcategory_id INT NOT NULL
    price INT NOT NULL, brand TEXT NOT NULL, qty INT NOT NULL, image TEXT NOT NULL,
    created_date datetime NOT NULL,
    updated_date timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());
    
    ALTER TABLE category ADD PRIMARY KEY (id);
    
    ALTER TABLE category ADD UNIQUE (subcategory_id, product_name(20));

    CREATE TABLE product_images ( pid INT NOT NULL, image TEXT NOT NULL);
        ALTER TABLE ADD FOREIGN KEY(pid) REFERENCES products (id);