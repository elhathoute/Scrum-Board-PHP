-- DROP TABLE IF EXISTS `tasks`;
-- DROP TABLE IF EXISTS `statues`;
-- DROP TABLE IF EXISTS `types`;
-- DROP TABLE IF EXISTS `priorities`;

--create table status
CREATE TABLE IF NOT EXISTS `statues` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
PRIMARY KEY(`id`)
);
--create table types
CREATE TABLE IF NOT EXISTS `types` (
`id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
PRIMARY KEY(`id`)
);
--create table priorities
CREATE TABLE IF NOT EXISTS `priorities` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
PRIMARY KEY(`id`)
);
--create table tasks
CREATE TABLE IF NOT EXISTS `tasks` (
    `id` int (11) NOT NULL AUTO_INCREMENT,
    `title` varchar(225) NOT NULL,
    `task_datetime` datetime NOT NULL,
    `description` text NOT NULL,
    `type_id` int(11) NOT NULL,
    `priority_id` int(11) NOT NULL,
    `status_id` int(11) NOT NULL,
    PRIMARY KEY(`id`),
     KEY `const_1` (`type_id`),
    KEY `const_2` (`priority_id`),
    KEY `const_3` (`status_id`)

);
--add foreing key in the table tasks
ALTER TABLE `tasks` 
  ADD CONSTRAINT `const_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `const_2` FOREIGN KEY (`priority_id`) REFERENCES `priorities` (`id`),
  ADD CONSTRAINT `const_3` FOREIGN KEY (`status_id`) REFERENCES `statues` (`id`);
--add some data in statues
INSERT INTO `statues`(`id`, `name`) VALUES ('','ToDo'),('','InProgress'),('','Done');