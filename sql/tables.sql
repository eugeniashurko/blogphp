DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS articles;
DROP TABLE IF EXISTS images;
DROP TABLE IF EXISTS notes;
DROP TABLE IF EXISTS projects;



CREATE TABLE users (
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    PRIMARY KEY(username)
);

CREATE TABLE images (
    id INT AUTO_INCREMENT,
    image_type VARCHAR(25) NOT NULL,
    image LONGBLOB NOT NULL,
    image_size VARCHAR(25) NOT NULL,
    image_ctgy VARCHAR(25) NOT NULL,
    image_name VARCHAR(50) NOT NULL,
    PRIMARY KEY(id) 
) CHARACTER SET latin1;

CREATE TABLE articles (
    id INT AUTO_INCREMENT,
    date_time DATETIME NOT NULL,
    title_en VARCHAR(80) NOT NULL DEFAULT 'No Title',
    title_ua VARCHAR(80) NOT NULL DEFAULT 'Без Назви',
    description_en VARCHAR(300) NOT NULL DEFAULT 'No Description',
    description_ua VARCHAR(300) NOT NULL DEFAULT 'Без Опису',
    body_en TEXT NOT NULL,
    body_ua TEXT NOT NULL,
    image_id INT DEFAULT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(image_id) REFERENCES images(id) ON DELETE CASCADE
) CHARACTER SET cp1251;

CREATE TABLE projects (
    id INT AUTO_INCREMENT,
    name_en VARCHAR(80) NOT NULL,
    name_ua VARCHAR(80) NOT NULL,
    active TINYINT(1) NOT NULL,
    PRIMARY KEY(id)
) CHARACTER SET cp1251;

CREATE TABLE notes (
    id INT AUTO_INCREMENT,
    date_time DATETIME NOT NULL,
    body_en VARCHAR(150) NOT NULL,
    body_ua VARCHAR(150) NOT NULL,
    project_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(project_id) REFERENCES projects(id) ON DELETE CASCADE
) CHARACTER SET cp1251;

