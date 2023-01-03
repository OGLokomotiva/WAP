CREATE SCHEMA IF NOT EXISTS `api` DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci;

USE `api`;

CREATE TABLE IF NOT EXISTS `api`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(600) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `api`.`users` (`name`) VALUES
('Pavel'),
('Lojza');