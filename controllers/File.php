<?php
class File extends Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add()
    {
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $type = $_FILES['file']['type'];
        $extension = strtolower(substr($name, strpos($name, '.') + 1));
        $tmp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];

        if (isset($name) AND !empty($name) AND $error == 0)
        {
            $location =  'uploads/' . $name;
            if(move_uploaded_file($tmp_name, $location))
            {
                $this->model->insertFile($name, $size, $type, $extension);
                $redirect = URL;
                header('Location: ' . $redirect);
            }
        }
    }

    public function delete()
    {
        if(isset($_POST['id']) AND !empty($_POST['id'])) {
            $id = $_POST['id'];
            $this->model->removeFile($id);
        }
    }

    public function save()
    {
        $text = $_POST['text'];
        $file = 'uploads/' . $_POST['name'];
        $this->model->updateFile($file, $text);
    }

    public function read()
    {
        $file =  'uploads/' . $_POST['name'];
        $this->model->readFile($file);
    }

}
?>