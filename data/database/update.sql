CREATE TABLE IF NOT EXISTS `contact` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT ,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createIP` varchar(255) DEFAULT NULL,
  `updateIp` varchar(255) DEFAULT NULL,
  `bucket` INTEGER,
  `sendedEmails` INTEGER
);
CREATE TABLE IF NOT EXISTS `mailings` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT ,
  `name` varchar(45) DEFAULT NULL,
  `content` text,
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createIP` varchar(255) DEFAULT NULL,
  `updateIp` varchar(255) DEFAULT NULL,
  `bucket` INTEGER,
  `sendedEmails` INTEGER
);

CREATE TABLE IF NOT EXISTS `contactgroups` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT ,
  `name` varchar(45) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `mailingtemplates` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT ,
  `name` varchar(45) DEFAULT NULL,
  `content` text
);