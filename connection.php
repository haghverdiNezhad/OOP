<?php

class connection
{
    protected $db;
    protected $tableName;
    protected $primarykey="id";
    public function __construct()
    {
        try {
            $this->db=new PDO("mysql:host=localhost;dbname=oop","root","");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (Exception $e){
            echo "error to connection database:".$e->getMessage();
        }
    }
    public function read($id)
    {
        $sql="select * from $this->tableName where $this->primarykey=:id";
        $stmt=$this->db->prepare($sql);
        $stmt->execute([":id"=>$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function delete($id)
    {
        $sql="delete from $this->tableName where $this->primarykey=:id";
        $stmt=$this->db->prepare($sql);
        $stmt->execute([":id"=>$id]);
    }
}