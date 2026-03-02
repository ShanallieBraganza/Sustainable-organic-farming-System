🌱 Sustainable Organic Farming Database System
📌 Project Overview
The Sustainable Organic Farming Database System is a DBMS-based mini project designed to store and manage detailed information about farmers, farms, and crops. The system verifies whether crops meet predefined organic farming standards and automatically classifies produce as Organic or Inorganic.

This project promotes transparency, sustainable farming practices, and structured agricultural data management.

🎯 Objective
To centralize farmer and farm-related data.
To validate farming practices against predefined organic standards.
To automatically classify produce as organic or inorganic.
To maintain a structured market database for transparency.

🧩 Modules Description
1️⃣ Farmer Module
Stores farmer information:
Farmer ID
First Name
Last Name
Contact
Location
Certificate

2️⃣ Farm Module
Maintains farm-related details:
Farm ID
Fertilizer Name & Value
Sensor Name & Value
Soil Type
Water Usage
Crop
Farmer ID (Foreign Key)

3️⃣ Crop Module
Defines organic farming standards for crops:
Crop Name
Soil Type
Fertilizer Range (Min & Max)
Sensor Range (Min & Max)
Water Requirement (Min & Max)
This module stores all the necessary conditions for a crop to qualify as organic.

4️⃣ Market Module
Classifies produce as Organic or Inorganic
Stores farmer and crop details after validation
Maintains categorized market records

🗂 Database Schema
FARMER
Field	Description
FARMER_ID	Primary Key
FNAME	First Name
LNAME	Last Name
CONTACT	Contact Details
LOCATION	Farmer Location
CERTIFICATE	Organic Certificate

FARM
Field	Description
FARM_ID	Primary Key
FERTILIZER_NAME	Fertilizer Used
FERTILIZER_VALUE	Quantity Used
SENSOR_NAME	Sensor Type
SENSOR_VALUE	Sensor Reading
SOIL	Soil Type
WATER_VALUE	Water Usage
CROP	Crop Name
FARMER_ID	Foreign Key

CROP
Field	Description
CROP	Crop Name
SOIL	Suitable Soil
FERTILIZER_NAME	Approved Fertilizer
FERTILIZER_MIN	Minimum Allowed
FERTILIZER_MAX	Maximum Allowed
SENSOR_NAME	Sensor Type
SENSOR_MIN	Minimum Value
SENSOR_MAX	Maximum Value
WATER_MIN	Minimum Water
WATER_MAX	Maximum Water

MARKET
Field	Description
MARKET_ID	Primary Key
LOCATION	Market Location
CERTIFICATE	Verification Status
FARMER_ID	Foreign Key
CROP	Crop Name

🛠️ Technologies Used
💻 Frontend
HTML
CSS
JavaScript

🗄️ Backend
PHP

🛢️ Database
MySQL

⚙️ System Requirements
Web Browser (Chrome / Edge / Firefox)
XAMPP / WAMP Server
MySQL Database
PHP Support

🚀 Expected Outcome
Secure storage of farmer and farm data
Automatic validation of organic conditions
Classification of crops as organic or inorganic
Structured and transparent market database
Improved trust between farmers, sellers, and consumers