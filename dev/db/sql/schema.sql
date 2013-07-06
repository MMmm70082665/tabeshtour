
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(45) NOT NULL,
    `password` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- country
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(25) NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    `publish` TINYINT(1) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- city
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    `country_id` INTEGER,
    `publish` TINYINT(1) NOT NULL,
    `date` DATE NOT NULL,
    `desc` TEXT,
    `useful_info` TEXT,
    `place` TEXT,
    `hotel` TEXT,
    `restoran` TEXT,
    `buy_center` TEXT,
    PRIMARY KEY (`id`),
    INDEX `city_FI_1` (`country_id`),
    CONSTRAINT `city_FK_1`
        FOREIGN KEY (`country_id`)
        REFERENCES `country` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- record_city
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `record_city`;

CREATE TABLE `record_city`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `day_counter` INTEGER NOT NULL,
    `status` TINYINT(1) NOT NULL,
    `city_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `record_city_FI_1` (`city_id`),
    CONSTRAINT `record_city_FK_1`
        FOREIGN KEY (`city_id`)
        REFERENCES `city` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- option
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `option`;

CREATE TABLE `option`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `record_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `option_FI_1` (`record_id`),
    CONSTRAINT `option_FK_1`
        FOREIGN KEY (`record_id`)
        REFERENCES `record_city` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- airplane_info
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `airplane_info`;

CREATE TABLE `airplane_info`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `office_name` VARCHAR(45) NOT NULL,
    `address` TEXT NOT NULL,
    `website` VARCHAR(60),
    `explaine` TEXT NOT NULL,
    `record_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `airplane_info_FI_1` (`record_id`),
    CONSTRAINT `airplane_info_FK_1`
        FOREIGN KEY (`record_id`)
        REFERENCES `record_city` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- reserve
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `reserve`;

CREATE TABLE `reserve`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    `family` VARCHAR(45) NOT NULL,
    `address` TEXT NOT NULL,
    `mobile` VARCHAR(11),
    `record_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `reserve_FI_1` (`record_id`),
    CONSTRAINT `reserve_FK_1`
        FOREIGN KEY (`record_id`)
        REFERENCES `record_city` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- post
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `subject` VARCHAR(255) NOT NULL,
    `long_desc` TEXT NOT NULL,
    `short_desc` TEXT,
    `publisher` TINYINT(1) NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    `tag` TEXT,
    `order` INTEGER NOT NULL,
    `view` INTEGER,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tiket
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tiket`;

CREATE TABLE `tiket`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(60) NOT NULL,
    `mobile` VARCHAR(11),
    `order` TINYINT(1) NOT NULL,
    `desc` TEXT NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    `publish` TINYINT(1) NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- member
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `office` VARCHAR(255) NOT NULL,
    `address` TEXT NOT NULL,
    `website` VARCHAR(60),
    `phone` VARCHAR(60) NOT NULL,
    `fax` VARCHAR(60),
    `date` VARCHAR(255) NOT NULL,
    `publish` TINYINT(1) NOT NULL,
    `desc` TEXT,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
