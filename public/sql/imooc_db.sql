#PAGECONFIG SQL
CREATE TABLE `page_config`(
  `id` INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  `sort` INT(11) UNSIGNED NOT NULL DEFAULT 0,
  `page` VARCHAR(50) NOT NULL DEFAULT ' ',
  `link` VARCHAR(255) NOT NULL DEFAULT '/'
)ENGINE = INNODB DEFAULT CHARSET = UTF8;

INSERT INTO page_config VALUES(null,1,'实战','/fight');
INSERT INTO page_config VALUES(null,2,'路径','/way');
INSERT INTO page_config VALUES(null,3,'猿问','/question');
INSERT INTO page_config VALUES(null,3,'手记','/handwrite');