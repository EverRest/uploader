<?php
class File_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertFile($name, $size, $type, $extension)
    {
        $sql = "INSERT INTO files(file,
            extension,
            type,
            size) VALUES (
            :file, 
            :extension, 
            :type, 
            :size)";
        $sth = $this->db->prepare($sql);
        $sth->bindParam(':file', $name, PDO::PARAM_STR);
        $sth->bindParam(':extension', $extension, PDO::PARAM_STR);
        $sth->bindParam(':type', $type, PDO::PARAM_STR);
        $sth->bindParam(':size', $size, PDO::PARAM_STR);
        $sth->execute();
    }

    public function removeFile($id , $name)
    {
        $sql = "DELETE FROM files WHERE id =  :id";
        $sth = $this->db->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->execute();

        if (file_exists($name)) {
            unlink($name);
        }
    }
    
    public function getAll()
    {
        $sth = $this->db->prepare('SELECT * FROM files');
        $sth->execute();
        return $sth->fetchAll();
    }

    public function readFile($file)
    {
        if ($fh = fopen($file, "r")) {
            $str = file_get_contents($file);
            fclose($fh);
            echo $str;
        }
    }

    public function updateFile($file, $text)
    {
        if (file_exists($file)) {
            file_put_contents($file, '');
            file_put_contents($file, $text);
            echo 'update file';
        } else {
            echo 'something goes wrong';
        }
    }
}
?>