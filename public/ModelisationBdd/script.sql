CREATE TABLE Client(
   client_id INT,
   name VARCHAR(255),
   email VARCHAR(255),
   password VARCHAR(255),
   birth_date DATE,
   surname VARCHAR(255),
   PRIMARY KEY(client_id)
);

CREATE TABLE Admin(
   admin_id INT,
   name VARCHAR(255),
   email VARCHAR(255),
   password VARCHAR(255),
   PRIMARY KEY(admin_id)
);

CREATE TABLE Course(
   course_id INT,
   name VARCHAR(255),
   description VARCHAR(500),
   duration INT,
   PRIMARY KEY(course_id)
);

CREATE TABLE time_slots(
   slot_id INT,
   course_id INT,
   slot_date DATE,
   start_time DATETIME,
   end_time DATETIME,
   available_slot INT,
   PRIMARY KEY(slot_id),
   FOREIGN KEY(course_id) REFERENCES Course(course_id)
);

CREATE TABLE reservation(
   reservation_id INT,
   client_id INT NOT NULL,
   reservation_date DATETIME,
   slot_id INT,
   admin_id INT NOT NULL,
   course_id INT NOT NULL,
   PRIMARY KEY(reservation_id),
   FOREIGN KEY(admin_id) REFERENCES Admin(admin_id),
   FOREIGN KEY(course_id) REFERENCES Course(course_id),
   FOREIGN KEY(client_id) REFERENCES Client(client_id)
);
