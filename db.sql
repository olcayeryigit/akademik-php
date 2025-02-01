-- Users tablosunun oluşturulması
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Örnek bir kullanıcı ekleme
INSERT INTO users (email, password) 
VALUES ('olcay@hotmail.com', '$2a$12$wW3NKnX8MvM6Va2k4dj1B.dx0MODBnHnPcxLwtPpLTMJsrpJUkp0y');


CREATE TABLE blogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255),
    description TEXT,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status TINYINT(1) DEFAULT 1 -- Durum sütunu, varsayılan olarak 1
);



CREATE TABLE announcements(
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  slug VARCHAR(255),
  description TEXT,
  image VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  status TINYINT(1) DEFAULT 1 -- Durum sütunu, varsayılan olarak 1

);

CREATE TABLE about(
  id INT AUTO_INCREMENT PRIMARY KEY,
 mainparagraph TEXT,
mission TEXT,
 vision TEXT,
 paragraph2 TEXT,
 paragraph3 TEXT
);


CREATE TABLE mainContent (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mainImage JSON,     -- mainImage'yi JSON olarak saklayacağız
    image2 VARCHAR(255)

);





CREATE TABLE imageSection(
    id INT AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR(255) NOT NULL,
    image VARCHAR(255),
    mobileImage VARCHAR(255)

);


CREATE TABLE testimonals(
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  image VARCHAR(255)
);


CREATE TABLE `webforms` (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name  varchar(255) NOT NULL,
  lastname varchar(255) NOT NULL,
  phone varchar(20) NOT NULL,
  message text NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO about (mainparagraph, mission, vision, paragraph2, paragraph3)
VALUES
(
  'This is the main paragraph of the about section.',
  'Our mission is to provide excellent services and products to our customers.',
  'Our vision is to be the market leader in our industry, providing innovative solutions.',
  'This is the second paragraph with additional information about our company.',
  'The third paragraph focuses on our commitment to sustainability and community involvement.'
);


INSERT INTO mainContent (mainImage, image2) 
VALUES ('["/assets/images/slider-1.jpg", "/assets/images/slider-2.jpg"]', '/assets/images/duyuru-kart.jpg');

INSERT INTO imageSection (title,image,mobileImage) 
VALUES (  'title','/assets/images/ara-slider-bursluluk.jpg','/assets/images/ara-slider-bursluluk-m.jpg');


INSERT INTO testimonals (title,image) 
VALUES (  'title','/assets/images/partners/british-council.svg');