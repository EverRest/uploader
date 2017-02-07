<?php
require_once '/models/File_Model.php';

class Index extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->model = new File_Model();
        Session::set('data',$this->model->getAll());
        $this->view->render('index/index');
    }
}
?>