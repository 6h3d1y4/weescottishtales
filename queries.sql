-- Table containing user data
CREATE TABLE users (				
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,				
	first_name VARCHAR(50) NOT NULL,			
	last_name VARCHAR(50) NOT NULL,			
	username VARCHAR(50) NOT NULL UNIQUE,			
	email VARCHAR(50) NOT NULL,			
	password VARCHAR(50) NOT NULL,			
	phone INT(50) NOT NULL,			
	is_admin BOOLEAN NOT NULL,			
	acc_start_date DATETIME DEFAULT CURRENT_TIMESTAMP	
);				
