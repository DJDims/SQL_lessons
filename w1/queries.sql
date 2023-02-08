CREATE TABLE t_stop(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    stopName VARCHAR(30) NOT NULL
);

CREATE TABLE t_route(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    routeNumber INT NOT NULL,
    startStop INT NOT NULL,
    finalStop INT NOT NULL,
    company INT NOT NULL,
    price INT NOT NULL,
    arriveTime TIME NOT NULL,
    departureTime TIME NOT NULL,
    daysRoute INT NOT NULL
);

CREATE TABLE t_company(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    companyName varchar(50) NOT NULL,
    charge TINYINT NOT NULL,
    ac TINYINT NOT NULL,
    coffeMachine TINYINT NOT NULL,
    internet TINYINT NOT NULL,
    wc TINYINT NOT NULL,
    usb TINYINT NOT NULL
);

CREATE TABLE t_ticket(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ticketName VARCHAR(50) NOT NULL,
    companyId INT NOT NULL
);

CREATE TABLE t_ticket_company(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ticketId INT NOT NULL,
    companyId INT NOT NULL,
    percent INT NOT NULL
);

CREATE TABLE t_days(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    daysRoute VARCHAR(10) NOT NULL
);

ALTER TABLE t_route
    ADD FOREIGN KEY (startStop) REFERENCES t_stop(id),
    ADD FOREIGN KEY (finalStop) REFERENCES t_stop(id),
    ADD FOREIGN KEY (company) REFERENCES t_company(id),
    ADD FOREIGN KEY (daysRoute) REFERENCES t_days(id);

ALTER TABLE t_ticket 
    ADD FOREIGN KEY (companyId) REFERENCES t_company(id);


ALTER TABLE t_ticket_company 
    ADD FOREIGN KEY (ticketId) REFERENCES t_ticket(id),
    ADD FOREIGN KEY (companyId) REFERENCES t_company(id);