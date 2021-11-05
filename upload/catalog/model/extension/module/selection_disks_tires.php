<?php

class ModelExtensionModuleSelectionDisksTires extends Model
{
    public function getBrands()
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "auto_brand`");

        $data = [];
        foreach ($query->rows as $brand) {
            $data[] = [
                'id' => $brand['name_short'],
                'name' => $brand['name'],
            ];
        }

        return $data;
    }

    public function getModels($brand)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "auto_model` WHERE `brand` = '$brand'");
        $data = [];
        foreach ($query->rows as $model) {
            $data[] = [
                'name_short' => $model['name_short'],
                'name' => $model['name'],
            ];
        }

        return $data;
    }

    public function getYears($brand, $model)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "auto_year` WHERE `brand` = '$brand' AND `model` = '$model'");
        $data = [];
        foreach ($query->rows as $year) {
            $data[] = [
                'value' => $year['value'],
            ];
        }

        return $data;
    }

    public function getModifications($brand, $model, $year)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX .
                                  "auto_modification` WHERE `brand` = '$brand' AND `model` = '$model' AND `year` = '$year'");
        $data = [];
        foreach ($query->rows as $modification) {
            $data[] = [
                'name' => $modification['name'],
                'name_short' => $modification['name_short'],
            ];
        }

        return $data;
    }

    public function getVariants($brand, $model, $year, $modification)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX .
                                  "auto_modification` WHERE `brand`='$brand' AND `model`='$model' AND `year`='$year' AND `name_short`='$modification'");
        $result = $query->rows;
        $modificationId = $result[0]['id'];

        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX .
                                  "auto_tires_factory` WHERE `modification` = '$modificationId'");
        $data = [];
        foreach ($query->rows as $variant) {
            $data['factory'][] = [
                'tire_marking' => $variant['tire_marking'],
                'tire_marking_front_axle' => $variant['tire_marking_front_axle'],
                'tire_marking_rear_axle' => $variant['tire_marking_rear_axle'],
            ];
        }

        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX .
                                  "auto_tires_replacement` WHERE `modification` = '$modificationId'");
        foreach ($query->rows as $variant) {
            $data['replacement'][] = [
                'tire_marking' => $variant['tire_marking'],
                'tire_marking_front_axle' => $variant['tire_marking_front_axle'],
                'tire_marking_rear_axle' => $variant['tire_marking_rear_axle'],
            ];
        }

        return $data;
    }
}
