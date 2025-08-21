CREATE DATABASE phpapp;
USE phpapp;

CREATE TABLE feedback(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR (100) NOT NULL,
    body TEXT,
    date DATETIME
);

INSERT INTO feedback(name,email,body,date)
VALUES
('Jhon','join@gmail.com','I like it',CURRENT_TIMESTAMP),
('Alice','alice@example.com','Great website!',CURRENT_TIMESTAMP),
('Bob','bob@example.com','Could be better.',CURRENT_TIMESTAMP),
('Charlie','charlie@example.com','Awesome support team!',CURRENT_TIMESTAMP),
('Daisy','daisy@example.com','Very user-friendly.',CURRENT_TIMESTAMP),
('Ethan','ethan@example.com','Fast and reliable.',CURRENT_TIMESTAMP);
