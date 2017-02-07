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
        $sth->bindParam(':file', $name);
        $sth->bindParam(':extension', $extension);
        $sth->bindParam(':type', $type);
        $sth->bindParam(':size', $size);
        $sth->execute();
    }

    public function removeFile($id)
    {
        $sql = "DELETE FROM files WHERE id =  :id";
        $sth = $this->db->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->execute();
    }
    
    public function getAll()
    {
        $sth = $this->db->prepare('SELECT * FROM files');
        $sth->execute();
        return $sth->fetchAll();
    }
}
?>