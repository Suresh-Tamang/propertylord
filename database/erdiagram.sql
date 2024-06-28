CREATE TABLE `admin` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `email` varchar(55) DEFAULT null,
  `pass` varchar(55) DEFAULT null,
  `contact` varchar(10) DEFAULT null
);

CREATE TABLE `category` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL
);

CREATE TABLE `messages` (
  `clientid` int(11) DEFAULT null,
  `message` varchar(10000) NOT NULL,
  `propertyid` int(11) DEFAULT null,
  `ownerid` int(11) DEFAULT null,
  `title` varchar(1000) DEFAULT null
);

CREATE TABLE `properties` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `location` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `publishdate` varchar(50) NOT NULL
);

CREATE TABLE `uploads` (
  `propertyid` int(11) DEFAULT null,
  `imagepath` varchar(100) DEFAULT null,
  `userid` int(11) DEFAULT null
);

CREATE TABLE `users` (
  `uid` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) DEFAULT null,
  `lastname` varchar(20) DEFAULT null,
  `email` varchar(255) DEFAULT null,
  `contact` varchar(10) DEFAULT null,
  `password` varchar(50) DEFAULT null
);

CREATE UNIQUE INDEX `email` ON `admin` (`email`);

CREATE INDEX `userid` ON `properties` (`userid`);

CREATE INDEX `propertyid` ON `uploads` (`propertyid`);

CREATE INDEX `userid` ON `uploads` (`userid`);

CREATE UNIQUE INDEX `email` ON `users` (`email`);

ALTER TABLE `properties` ADD FOREIGN KEY (`userid`) REFERENCES `users` (`uid`);

ALTER TABLE `properties` ADD FOREIGN KEY (`category`) REFERENCES `category` (`id`);

ALTER TABLE `uploads` ADD FOREIGN KEY (`propertyid`) REFERENCES `properties` (`id`);

ALTER TABLE `messages` ADD FOREIGN KEY (`ownerid`) REFERENCES `properties` (`userid`);

ALTER TABLE `messages` ADD FOREIGN KEY (`clientid`) REFERENCES `users` (`uid`);

ALTER TABLE `messages` ADD FOREIGN KEY (`message`) REFERENCES `properties` (`id`);
