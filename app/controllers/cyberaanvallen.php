<?php

class cyberaanvallen extends BaseController
{
    private $sneakersModel;

    public function __construct()
    {
        $this->sneakersModel = $this->model('CyberaanvallenModel');
    }

    public function index()
    {
        /**
         * Je roept de method getAllSmartphones aan van de smartphoneModel class
         */
        $results = $this->sneakersModel->getAllCyberaanvallen();
        
        $data = [
            'title' => 'Top 5 cyberaanvallen aller tijden',
            'result' => $results
        ];

        $this->view('cyberaanvallen/index', $data);
    }
}