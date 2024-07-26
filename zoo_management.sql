CREATE DATABASE zoo_management;

USE zoo_management;

-- Table for storing animal details
CREATE TABLE animals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    species VARCHAR(100),
    age INT,
    habitat VARCHAR(100),
    arrival_date DATE,
    health_status ENUM('healthy', 'sick', 'under treatment') DEFAULT 'healthy'
);

-- Table for storing staff details
CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    position VARCHAR(100),
    hire_date DATE,
    salary DECIMAL(10, 2)
);

-- Table for storing visitor details
CREATE TABLE visitors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    visit_date DATE,
    ticket_number VARCHAR(100) UNIQUE
);

-- Table for storing visitor feedback
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    visitor_id INT,
    feedback_text TEXT,
    feedback_date DATE,
    FOREIGN KEY (visitor_id) REFERENCES visitors(id)
);
