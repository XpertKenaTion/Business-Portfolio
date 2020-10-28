CREATE DATABASE kenationtechnologies;
USE kenationtechnologies;

CREATE TABLE messages (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    messages VARCHAR(100) NOT NULL
    
);