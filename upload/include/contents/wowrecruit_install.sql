CREATE TABLE IF NOT EXISTS `prefix_wow_recruit` (
    `class` VARCHAR(50) NOT NULL,
    `spec1` INT(1) NOT NULL DEFAULT '0',
    `spec2` INT(1) NOT NULL DEFAULT '0',
    `spec3` INT(1) NOT NULL DEFAULT '0',
    `spec4` INT(1) NOT NULL DEFAULT '0'
)
ENGINE=MyISAM;

INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('druid');
INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('warlock');
INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('hunter');
INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('warrior');
INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('mage');
INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('paladin');
INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('priest');
INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('shaman');
INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('rogue');
INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('deathknight');
INSERT INTO `prefix_wow_recruit` (`class`) VALUES ('monk');

INSERT INTO `prefix_modules` (`url`,`name`,`gshow`,`ashow`,`fright`) VALUES ('recruit','Rekrutierung','1','1','1');