<?php
class ControllerExtensionModuleSelectionDisksTires extends Controller
{
    public function index()
    {
        $this->load->model('extension/module/selection_disks_tires');
        $this->document->addStyle('catalog/view/javascript/selection-disks-tires/style.css');
        $this->document->addScript('catalog/view/javascript/selection-disks-tires/main.js');
        $data = [
            'brands' => $this->model_extension_module_selection_disks_tires->getBrands(),
        ];
        return $this->load->view('extension/module/selection_disks_tires', $data);
    }

    public function models()
    {
        $brand = $this->request->get['brand'];
        $this->load->model('extension/module/selection_disks_tires');
        $json = $this->model_extension_module_selection_disks_tires->getModels($brand);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function years()
    {
        $brand = $this->request->get['brand'];
        $model = $this->request->get['model'];
        $this->load->model('extension/module/selection_disks_tires');
        $json = $this->model_extension_module_selection_disks_tires->getYears($brand, $model);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function modifications()
    {
        $brand = $this->request->get['brand'];
        $model = $this->request->get['model'];
        $year = $this->request->get['year'];
        $this->load->model('extension/module/selection_disks_tires');
        $json = $this->model_extension_module_selection_disks_tires->getModifications($brand, $model, $year);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function variants()
    {
        $brand = $this->request->get['brand'];
        $model = $this->request->get['model'];
        $year = $this->request->get['year'];
        $modification = $this->request->get['modification'];
        $this->load->model('extension/module/selection_disks_tires');
        $json = $this->model_extension_module_selection_disks_tires->getVariants($brand, $model, $year, $modification);
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
