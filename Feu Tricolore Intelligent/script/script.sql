CREATE TABLE `projet`.`policier` ( `id` INT(11) NOT NULL AUTO_INCREMENT 
	, `firstname` VARCHAR(255) NOT NULL , `lastname` VARCHAR(255) NOT NULL 
	, `email` VARCHAR(255) NOT NULL , `pwd` VARCHAR(255) NOT NULL 
	, `cni` VARCHAR(255) NOT NULL , `grade` VARCHAR(255) NOT NULL 
	, PRIMARY KEY (`id`)) ENGINE = MyISAM;
CREATE TABLE `projet`.`system` ( `id` INT(11) NOT NULL AUTO_INCREMENT
	 , `id_route` INT(11) NOT NULL 
	 , `id_feu` INT(11) NOT NULL 
	 , `nbr_v` INT(11) NOT NULL 
	 , `etat` VARCHAR NOT NULL 
	 , PRIMARY KEY (`id`)) ENGINE = MyISAM;
CREATE TABLE `projet`.`route` ( `id` INT(11) NOT NULL 
	, `nbr_v` INT(11) NOT NULL 
	, `id_feu` INT(11) NOT NULL ) ENGINE = MyISAM;
INSERT INTO `route` (`id`, `nbr_v`, `id_feu`) 
			VALUES ('1', '0', '1'), ('2', '0', '2'), ('3', '0', '3'), ('4', '0', '4');
CREATE TABLE `projet`.`feu` ( `id` INT(11) NOT NULL 
	, `etat` VARCHAR(255) NOT NULL ) ENGINE = MyISAM;
INSERT INTO `feu` (`id`, `etat`) 
			VALUES ('1', ''), ('2', ''), ('3', ''), ('4', '');