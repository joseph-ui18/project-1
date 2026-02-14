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

