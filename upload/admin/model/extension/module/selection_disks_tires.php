<?php
class ModelExtensionModuleSelectionDisksTires extends Model
{
    public function install() {
        $this->db->query("SET GLOBAL max_allowed_packet=1073741824");
        $this->db->query("
			CREATE TABLE `" . DB_PREFIX . "auto_brand` (
              `id` int(11) NOT NULL,
              `name` varchar(255) NOT NULL,
              `name_short` varchar(255) NOT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");

        $this->db->query("
			CREATE TABLE `" . DB_PREFIX . "auto_model` (
              `id` int(11) NOT NULL,
              `name` varchar(255) NOT NULL,
              `name_short` varchar(255) NOT NULL,
              `brand` varchar(255) NOT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");

        $this->db->query("
			CREATE TABLE `" . DB_PREFIX . "auto_modification` (
              `id` int(11) NOT NULL,
              `name` varchar(255) NOT NULL,
              `name_short` varchar(255) NOT NULL,
              `model` varchar(255) NOT NULL,
              `year` varchar(255) NOT NULL,
              `brand` varchar(255) NOT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");

        $this->db->query("
			CREATE TABLE `" . DB_PREFIX . "auto_year` (
              `id` int(11) NOT NULL,
              `value` varchar(255) NOT NULL,
              `model` varchar(255) NOT NULL,
              `brand` varchar(255) NOT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");

        $this->db->query("
			CREATE TABLE `" . DB_PREFIX . "auto_tires_factory` (
              `id` int(11) NOT NULL,
              `modification` int(11) NOT NULL,
              `tire_marking` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
              `tire_marking_front_axle` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
              `tire_marking_rear_axle` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");

        $this->db->query("
			CREATE TABLE `" . DB_PREFIX . "auto_tires_replacement` (
              `id` int(11) NOT NULL,
              `modification` int(11) NOT NULL,
              `tire_marking` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
              `tire_marking_front_axle` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
              `tire_marking_rear_axle` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");

        $this->db->query(file_get_contents('../../sql/oc_auto_brand.sql'));
        $this->db->query(file_get_contents('../../sql/oc_auto_model.sql'));
        $this->db->query(file_get_contents('../../sql/oc_auto_year.sql'));
        $this->db->query(file_get_contents('../../sql/oc_auto_modification.sql'));
        $this->db->query(file_get_contents('../../sql/oc_auto_tires_factory.sql'));
        $this->db->query(file_get_contents('../../sql/oc_auto_tires_replacement.sql'));
    }

    public function uninstall() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "auto_brand`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "auto_model`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "auto_year`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "auto_modification`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "auto_tires_factory`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "auto_tires_replacement`");
    }
}
