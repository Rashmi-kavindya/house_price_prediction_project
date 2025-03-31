CREATE DATABASE house_data;

USE house_data;

CREATE TABLE predictions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bedroom_count INT,
    net_sqm FLOAT,
    center_distance FLOAT,
    metro_distance FLOAT,
    floor INT,
    predicted_price FLOAT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);