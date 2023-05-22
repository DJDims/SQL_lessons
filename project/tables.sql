CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('USER', 'ADMIN') NOT NULL DEFAULT 'USER'
);

CREATE TABLE companies (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL UNIQUE
);

CREATE TABLE sockets (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL UNIQUE
);

CREATE TABLE processors (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL UNIQUE,
    socketId INT NOT NULL,
    generation VARCHAR(40) NOT NULL,
    cores INT(2) NOT NULL,
    frequency INT(2) NOT NULL,
    consuming INT(3) NOT NULL,
    threads INT(2) NOT NULL,
    graphic ENUM('TRUE', 'FALSE') NOT NULL,
    price FLOAT(6) NOT NULL,
    companyId INT NOT NULL
);

CREATE TABLE coolers (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL UNIQUE,
    rotationsMin INT(4) NOT NULL,
    rotationsMax INT(4) NOT NULL,
    connector ENUM('2','4') NOT NULL,
    price FLOAT(6) NOT NULL,
    companyId INT NOT NULL
);

CREATE TABLE motherboards (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL UNIQUE,
    socketId INT NOT NULL,
    memoryCount INT(1) NOT NULL,
    memoryType ENUM('DDR','DDR2','DDR3','DDR4','DDR5'),
    memoryMax INT(3) NOT NULL,
    memoryFrequency INT(4) NOT NULL,
    wifi ENUM('TRUE', 'FALSE') NOT NULL,
    sataports INT(1) NOT NULL,
    sata3ports INT(1) NOT NULL,
    usb2ports INT(1) NOT NULL,
    usb3ports INT(1) NOT NULL,
    dviport INT(1) NOT NULL,
    hdmi INT(1) NOT NULL,
    price FLOAT(6) NOT NULL,
    companyId INT NOT NULL
);

CREATE TABLE memorys (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL UNIQUE,
    type ENUM('DDR','DDR2','DDR3','DDR4','DDR5'),
    storage INT(2) NOT NULL,
    frequency INT(5) NOT NULL,
    consuming INT(3) NOT NULL,
    price FLOAT(6) NOT NULL,
    companyId INT NOT NULL
);

CREATE TABLE harddrives (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL UNIQUE,
    storage INT(4) NOT NULL,
    type ENUM('HDD', 'SSD'),
    writeSpeed INT(3) NOT NULL,
    readSpeed INT(3) NOT NULL,
    sataType ENUM('SATA2', 'SATA3'),
    price FLOAT(6) NOT NULL,
    companyId INT NOT NULL
);

CREATE TABLE videocards (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL UNIQUE,
    hdmi INT(1) NOT NULL,
    dvi INT(1) NOT NULL,
    frequency INT(4) NOT NULL,
    memory INT(2) NOT NULL,
    coolers INT(1) NOT NULL,
    price FLOAT(6) NOT NULL,
    companyId INT NOT NULL
);

CREATE TABLE powerblocks (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL UNIQUE,
    power INT(4) NOT NULL,
    price FLOAT(6) NOT NULL,
    companyId INT NOT NULL
);

CREATE TABLE corpuses (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL UNIQUE,
	coolers INT(1) NOT NULL,
    usb INT(1) NOT NULL,
    price FLOAT(6) NOT NULL,
    companyId INT NOT NULL
);

CREATE TABLE builds (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    processorId INT NOT NULL,
    coolerId INT NOT NULL,
    coolerCount INT(1) NOT NULL,
    motherboardId INT NOT NULL,
    memoryId INT NOT NULL,
    memoryCount INT(1) NOT NULL,
    harddriveId INT NOT NULL,
    harddriveCount INT(1) NOT NULL,
    videocardId INT NOT NULL,
    videocardCount INT(1) NOT NULL,
    powerblockId INT NOT NULL,
    corpusId INT NOT NULL,
    userId INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    description VARCHAR(1000) NOT NULL
);