-- companies
INSERT INTO `t_company`(`id`, `companyName`, `charge`, `ac`, `coffeMachine`, `internet`, `wc`, `usb`) VALUES ('1','Ekspress-Auto L','0','1','0','1','0','0');
INSERT INTO `t_company`(`id`, `companyName`, `charge`, `ac`, `coffeMachine`, `internet`, `wc`, `usb`) VALUES ('2','Lux Express','1','1','1','1','1','0');
INSERT INTO `t_company`(`id`, `companyName`, `charge`, `ac`, `coffeMachine`, `internet`, `wc`, `usb`) VALUES ('3','Valgis','1','1','0','1','0','0');
INSERT INTO `t_company`(`id`, `companyName`, `charge`, `ac`, `coffeMachine`, `internet`, `wc`, `usb`) VALUES ('4','Baltic Shuttle','1','1','0','1','1','0');
INSERT INTO `t_company`(`id`, `companyName`, `charge`, `ac`, `coffeMachine`, `internet`, `wc`, `usb`) VALUES ('5','GoBus','0','0','0','0','0','1');
INSERT INTO `t_company`(`id`, `companyName`, `charge`, `ac`, `coffeMachine`, `internet`, `wc`, `usb`) VALUES ('6','Estonian Lines','1','1','0','1','1','0');
INSERT INTO `t_company`(`id`, `companyName`, `charge`, `ac`, `coffeMachine`, `internet`, `wc`, `usb`) VALUES ('7','Presto','0','0','0','0','0','0');
INSERT INTO `t_company`(`id`, `companyName`, `charge`, `ac`, `coffeMachine`, `internet`, `wc`, `usb`) VALUES ('8','Arilix','0','0','0','0','0','0');
INSERT INTO `t_company`(`id`, `companyName`, `charge`, `ac`, `coffeMachine`, `internet`, `wc`, `usb`) VALUES ('9','MK Autobuss','0','1','0','1','1','1');
-- companies

-- stops
INSERT INTO `t_stop`(`id`, `stopName`) VALUES ('1','Narva Bussijaam');
INSERT INTO `t_stop`(`id`, `stopName`) VALUES ('2','Narva Fama');
INSERT INTO `t_stop`(`id`, `stopName`) VALUES ('3','Narva Tempo');
INSERT INTO `t_stop`(`id`, `stopName`) VALUES ('4','Sillamae Bussijaam');
INSERT INTO `t_stop`(`id`, `stopName`) VALUES ('5','Johvi Bussijaam');
INSERT INTO `t_stop`(`id`, `stopName`) VALUES ('6','Tallinn Bussijaam');
-- stops

-- days
INSERT INTO `t_days`(`id`, `daysRoute`) VALUES ( 1, 'EVR');
INSERT INTO `t_days`(`id`, `daysRoute`) VALUES ( 2, 'WDA');
INSERT INTO `t_days`(`id`, `daysRoute`) VALUES ( 3, 'WND');
INSERT INTO `t_days`(`id`, `daysRoute`) VALUES ( 4, 'MON');
INSERT INTO `t_days`(`id`, `daysRoute`) VALUES ( 5, 'TUE');
INSERT INTO `t_days`(`id`, `daysRoute`) VALUES ( 6, 'WED');
INSERT INTO `t_days`(`id`, `daysRoute`) VALUES ( 7, 'THU');
INSERT INTO `t_days`(`id`, `daysRoute`) VALUES ( 8, 'FRI');
INSERT INTO `t_days`(`id`, `daysRoute`) VALUES ( 9, 'SAT');
INSERT INTO `t_days`(`id`, `daysRoute`) VALUES ( 10, 'SUN');
-- days

-- routes
INSERT INTO `t_route`(`id`, `routeNumber`, `startStop`, `finalStop`, `company`, `price`, `departureTime`, `arriveTime`, `daysRoute`) VALUES ('1','396','1','4','2','4.00','05:30:00','06:05:00','1');
INSERT INTO `t_route`(`id`, `routeNumber`, `startStop`, `finalStop`, `company`, `price`, `departureTime`, `arriveTime`, `daysRoute`) VALUES ('2','396','1','5','2','5.00','05:30:00','06:25:00','1');
INSERT INTO `t_route`(`id`, `routeNumber`, `startStop`, `finalStop`, `company`, `price`, `departureTime`, `arriveTime`, `daysRoute`) VALUES ('3','396','4','5','2','4.00','06:05:00','06:25:00','1');
-- routes

-- tickets
INSERT INTO `t_ticket`(`id`, `ticketName`, `companyId`, `percent`) VALUES ('1','Under 26', 2, 26);
INSERT INTO `t_ticket`(`id`, `ticketName`, `companyId`, `percent`) VALUES ('2','Under 16', 2, 40);
INSERT INTO `t_ticket`(`id`, `ticketName`, `companyId`, `percent`) VALUES ('3','Under 7', 2, 100);
INSERT INTO `t_ticket`(`id`, `ticketName`, `companyId`, `percent`) VALUES ('4','Older 60', 2, 40);
INSERT INTO `t_ticket`(`id`, `ticketName`, `companyId`, `percent`) VALUES ('5','Disabled person under 16', 2, 100);
INSERT INTO `t_ticket`(`id`, `ticketName`, `companyId`, `percent`) VALUES ('6','Disabled person in need of an escort', 2, 100);
-- tickets