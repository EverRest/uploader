<?php
require_once '/models/File_Model.php';

class Index extends Controller {
    public function __construct() {
        parent::__construct();
        setcookie ("base_url", URL, time() + 3600);
    }

    public function index() {
        $this->model = new File_Model();
        Session::set('data',$this->model->getAll());
        $this->view->render('index/index');
    }
}
?>