CREATE TABLE animals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    species VARCHAR(100),
    age INT,
    enclosure_id INT,
    FOREIGN KEY (enclosure_id) REFERENCES enclosures(id)
);
