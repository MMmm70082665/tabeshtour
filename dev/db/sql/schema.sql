
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- tour
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tour`;

CREATE TABLE `tour`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `package_code` VARCHAR(255) NOT NULL,
    `begin_date` VARCHAR(255) NOT NULL,
    `end_date` VARCHAR(255) NOT NULL,
    `cost` VARCHAR(15) NOT NULL,
    `mabda` VARCHAR(15) NOT NULL,
    `madarek` TEXT NOT NULL,
    `khadamat` TEXT NOT NULL,
    `desc` TEXT NOT NULL,
    `kind` VARCHAR(255) NOT NULL,
    `travel` VARCHAR(255) NOT NULL,
    `type` VARCHAR(255) NOT NULL,
    `status` TINYINT(1) NOT NULL,
    `city_id` INTEGER,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `package_code` (`package_code`),
    INDEX `tour_FI_1` (`city_id`),
    CONSTRAINT `tour_FK_1`
        FOREIGN KEY (`city_id`)
        REFERENCES `city` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tour_reserve
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tour_reserve`;

CREATE TABLE `tour_reserve`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    `family` VARCHAR(45) NOT NULL,
    `address` TEXT NOT NULL,
    `telphone` VARCHAR(11),
    `mobile` VARCHAR(11) NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    `tour_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `tour_reserve_FI_1` (`tour_id`),
    CONSTRAINT `tour_reserve_FK_1`
        FOREIGN KEY (`tour_id`)
        REFERENCES `tour` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tour_comment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tour_comment`;

CREATE TABLE `tour_comment`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255),
    `desc` TEXT NOT NULL,
    `answer` TEXT,
    `publish` TINYINT(1) NOT NULL,
    `tour_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `tour_comment_FI_1` (`tour_id`),
    CONSTRAINT `tour_comment_FK_1`
        FOREIGN KEY (`tour_id`)
        REFERENCES `tour` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- city
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `city` VARCHAR(255) NOT NULL,
    `country` VARCHAR(255) NOT NULL,
    `desc` TEXT,
    `useful_info` TEXT,
    `place` TEXT,
    `hotel` TEXT,
    `restoran` TEXT,
    `buy_center` TEXT,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- partners
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `partners`;

CREATE TABLE `partners`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `address` TEXT NOT NULL,
    `website` VARCHAR(60),
    `phone` VARCHAR(60) NOT NULL,
    `fax` VARCHAR(60),
    `desc` TEXT,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- news
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `subject` VARCHAR(255) NOT NULL,
    `long_desc` TEXT NOT NULL,
    `short_desc` TEXT,
    `publish` TINYINT(1) NOT NULL,
    `date` VARCHAR(255) NOT NULL,
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
    `subject` VARCHAR(255) NOT NULL,
    `email` VARCHAR(60) NOT NULL,
    `mobile` VARCHAR(11),
    `desc` TEXT NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    `publish` TINYINT(1) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(45) NOT NULL,
    `password` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `username` (`username`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- slider
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `content` VARCHAR(255) NOT NULL,
    `shenase` VARCHAR(255) NOT NULL,
    `xpos` INTEGER NOT NULL,
    `ypos` INTEGER NOT NULL,
    `effect` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
