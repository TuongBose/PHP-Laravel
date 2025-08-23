CREATE DATABASE laravelapp;
USE laravelapp;

INSERT INTO posts(title, body) VALUES
('First job','This is the first job');

INSERT INTO categories(name, description) VALUES
('Vietnamese food','This is Viet Nam food'),
('Japanese food','This is Japan food'),
('Fruit and Vegetables','Apple, Watermelon');

INSERT INTO foods(name, count, description,category_id) VALUES
('sushi',3,'Do an rat ngon',2),
('lau thai',4,'binh thuong',2),
('hacao',1,'Do an rat do',1),
('Pho bo',1,'Mot mon an truyen thong',1);


SELECT * FROM posts;
SELECT * FROM foods;
SELECT * FROM categories;