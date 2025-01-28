-- Users tablosunun oluşturulması
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Örnek bir kullanıcı ekleme
INSERT INTO users (email, password) 
VALUES ('olcay@hotmail.com', '123456');


CREATE TABLE blogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE announcements(
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  image VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE about(
  id INT AUTO_INCREMENT PRIMARY KEY,
 mainparagraph TEXT,
mission TEXT,
 vision TEXT,
 paragraph2 TEXT,
 paragraph3 TEXT
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
