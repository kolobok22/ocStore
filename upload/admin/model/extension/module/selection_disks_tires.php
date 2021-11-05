<?php
class ModelExtensionModuleSelectionDisksTires extends Model
{
    public function install() {
        $this->db->query("
			CREATE TABLE `" . DB_PREFIX . "auto_brand` (
				`id` INT(11) NOT NULL AUTO_INCREMENT,
				`name` varchar(255) NOT NULL,
				`name_short` varchar(255) NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");
        $this->db->query("
			INSERT INTO `" . DB_PREFIX . "auto_brand` (`name_short`, `name`)
			 VALUES
			    ('acura', 'Acura'),
                ('alfa-romeo', 'Alfa-Romeo'),
                ('aston-martin', 'Aston-Martin'),
                ('audi', 'Audi'),
                ('bmw', 'BMW'),
                ('byd', 'BYD'),
                ('bentley', 'Bentley'),
                ('brilliance', 'Brilliance'),
                ('cadillac', 'Cadillac'),
                ('changan', 'Changan'),
                ('chery', 'Chery'),
                ('cheryexeed', 'Cheryexeed'),
                ('chevrolet', 'Chevrolet'),
                ('chrysler', 'Chrysler'),
                ('citroen', 'Citroen'),
                ('daewoo', 'Daewoo'),
                ('daihatsu', 'Daihatsu'),
                ('datsun', 'Datsun'),
                ('dodge', 'Dodge'),
                ('dongfeng', 'Dongfeng'),
                ('ds', 'Ds'),
                ('dw', 'Dw'),
                ('faw', 'FAW'),
                ('ferrari', 'Ferrari'),
                ('fiat', 'Fiat'),
                ('ford', 'Ford'),
                ('foton', 'Foton'),
                ('gac', 'Gac'),
                ('geely', 'Geely'),
                ('genesis', 'Genesis'),
                ('great-wall', 'Great-Wall'),
                ('hafei', 'Hafei'),
                ('haima', 'Haima'),
                ('haval', 'Haval'),
                ('hawtai', 'Hawtai'),
                ('honda', 'Honda'),
                ('hummer', 'Hummer'),
                ('hyundai', 'Hyundai'),
                ('infiniti', 'Infiniti'),
                ('iran-khodro', 'Iran-Khodro'),
                ('isuzu', 'Isuzu'),
                ('iveco', 'Iveco'),
                ('jac', 'Jac'),
                ('jaguar', 'Jaguar'),
                ('jeep', 'Jeep'),
                ('kia', 'Kia'),
                ('lamborghini', 'Lamborghini'),
                ('land-rover', 'Land Rover'),
                ('lexus', 'Lexus'),
                ('lifan', 'Lifan'),
                ('lincoln', 'Lincoln'),
                ('maserati', 'Maserati'),
                ('maybach', 'Maybach'),
                ('mazda', 'Mazda'),
                ('mercedes', 'Mercedes'),
                ('mini', 'Mini'),
                ('mitsubishi', 'Mitsubishi'),
                ('nissan', 'Nissan'),
                ('opel', 'Opel'),
                ('peugeot', 'Peugeot'),
                ('pontiac', 'Pontiac'),
                ('porsche', 'Porsche'),
                ('ravon', 'Ravon'),
                ('renault', 'Renault'),
                ('rolls-royce', 'Rolls-Royce'),
                ('rover', 'Rover'),
                ('saab', 'Saab'),
                ('seat', 'Seat'),
                ('skoda', 'Skoda'),
                ('smart', 'Smart'),
                ('ssang-yong', 'Ssang-Yong'),
                ('subaru', 'Subaru'),
                ('suzuki', 'Suzuki'),
                ('tagaz', 'Tagaz'),
                ('tesla', 'Tesla'),
                ('toyota', 'Toyota'),
                ('volkswagen', 'Volkswagen'),
                ('volvo', 'Volvo'),
                ('vortex-tagaz', 'Vortex (tagaz)'),
                ('zaz', 'ZAZ'),
                ('zotye', 'Zotye'),
                ('azlk', 'АЗЛК'),
                ('vaz', 'ВАЗ'),
                ('gaz', 'ГАЗ'),
                ('oka', 'Ока'),
                ('uaz', 'УАЗ')
			 ;
		");


        $this->db->query("
			CREATE TABLE `" . DB_PREFIX . "auto_model` (
				`id` INT(11) NOT NULL AUTO_INCREMENT,
				`name` varchar(255) NOT NULL,
				`name_short` varchar(255) NOT NULL,
				`brand` varchar(255) NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");

        $this->db->query("
			CREATE TABLE `" . DB_PREFIX . "auto_year` (
				`id` INT(11) NOT NULL AUTO_INCREMENT,
				`value` varchar(255) NOT NULL,
				`model` varchar(255) NOT NULL,
				`brand` varchar(255) NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");

        $this->db->query("
			CREATE TABLE `" . DB_PREFIX . "auto_modification` (
				`id` INT(11) NOT NULL AUTO_INCREMENT,
				`name` varchar(255) NOT NULL,
				`name_short` varchar(255) NOT NULL,
				`model` varchar(255) NOT NULL,
				`year` varchar(255) NOT NULL,
				`brand` varchar(255) NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");
    }

    public function uninstall() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "auto_brand`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "auto_model`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "auto_year`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "auto_modification`");
    }
}
