cd project structure:

airport_system/
│
├── config/
│   └── db.php          
│
├── admin/
│   ├── dashboard.php
│   ├── flights.php
│   ├── airports.php
│
├── passenger/
│   ├── register.php
│   ├── book.php
│
├── login.php
└── index.php

2/15/2025 - 12:57

paste this into xampp. like yung sa sql. new database.

ALTER TABLE users
ADD COLUMN email VARCHAR(100) NOT NULL AFTER password,
ADD COLUMN phone VARCHAR(20) AFTER email,
ADD COLUMN profile_pic VARCHAR(255) AFTER phone;

this too:

INSERT INTO users (username, password, email, phone, profile_pic, role_id)
VALUES (
    'admin', 
    '$2y$10$e0NR8uM7nI2j7P0kU8uS8eV5KJqO0U7O2lTq7QY/F4KJ1v3M1YpCq',
	'admin12345',
    'admin@globalairline.com',
    '09999999999'
    'uploads/admin.png',
    1
);

