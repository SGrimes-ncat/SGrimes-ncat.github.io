
	CREATE TABLE Users (
	    user_id INT PRIMARY KEY AUTO_INCREMENT,
	    username VARCHAR(50),
	    password VARCHAR(255),
	    email VARCHAR(100),
	    role VARCHAR(20)
	);
	
	CREATE TABLE Food_Trucks (
	    truck_id INT PRIMARY KEY AUTO_INCREMENT,
	    truck_name VARCHAR(100),
	    owner_id INT,
	    location VARCHAR(255),
	    FOREIGN KEY (owner_id) REFERENCES Users(user_id)
	);
	
	CREATE TABLE Bookings (
	    booking_id INT PRIMARY KEY AUTO_INCREMENT,
	    user_id INT,
	    truck_id INT,
	    event_date DATE,
	    event_time TIME,
	    status VARCHAR(20),
	    FOREIGN KEY (user_id) REFERENCES Users(user_id),
	    FOREIGN KEY (truck_id) REFERENCES Food_Trucks(truck_id)
	);
	
	CREATE TABLE Catering_Requests (
	    catering_id INT PRIMARY KEY AUTO_INCREMENT,
	    user_id INT,
	    truck_id INT,
	    request_date DATE,
	    request_time TIME,
	    details TEXT,
	    status VARCHAR(20),
	    FOREIGN KEY (user_id) REFERENCES Users(user_id),
	    FOREIGN KEY (truck_id) REFERENCES Food_Trucks(truck_id)
	);
	
	CREATE TABLE Menu_Items (
	    menu_id INT PRIMARY KEY AUTO_INCREMENT,
	    truck_id INT,
	    item_name VARCHAR(100),
	    description TEXT,
	    price DECIMAL(10, 2),
	    FOREIGN KEY (truck_id) REFERENCES Food_Trucks(truck_id)
	);
	
	CREATE TABLE Truck_Availability (
            availability_id INT PRIMARY KEY AUTO_INCREMENT,
            truck_id INT,
            available_date DATE,
	    available_time_start TIME,
	    available_time_end TIME,
	    FOREIGN KEY (truck_id) REFERENCES Food_Trucks(truck_id)
	);
