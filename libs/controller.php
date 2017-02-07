<?php
class Controller
{
    public function __construct() {
        $this->view = new View();
    }

    public function loadModel($name)
    {
        $path = 'models/' . $name . '_Model.php';
        if (file_exists($path)) {
            require 'models/' . $name . '_Model.php';
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }
}
?>