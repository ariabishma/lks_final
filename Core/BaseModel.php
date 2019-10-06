<?php
namespace Core;
class BaseModel{
    public $temp_query;
    private $conn;
    private $where;
    private $key_id;
    public function __construct()
    {
        $this->where = false;
        $this->conn = new \mysqli("localhost","root","","lks");

        $this->temp_query = "SELECT $this->table.* FROM $this->table";
    }

    public function all(Type $var = null)
    {
        return $this->exec();
    }

    public function custom($q)
    {
        $this->temp_query = $q;
        return $this;
    }

    public function find($id)
    {
        $this->temp_query .= " WHERE $this->key = '$id'";
        $this->key_id = $id;
        return $this;
    }

    public function where($key,$value)
    {
        if($this->where){
            $this->temp_query .= " AND $key = '$value'";
        }else{
            $this->temp_query .= " WHERE $key = '$value'";
            $this->where = true;
        }
        return $this;
    }



    public function create($data)
    {
        $key = "";
        $value = "";
        foreach ($data as $key1 => $value1) {
            $key .= $key1.",";
            $value .= "'".$value1."',";
        }
        $key=rtrim($key,",");
        $value=rtrim($value,",");

        $this->temp_query = "INSERT INTO $this->table ($key) VALUES ($value)";
        
        return mysqli_query($this->conn,$this->temp_query);
        
        $this->where = true;
        $this->temp_query = "SELECT $this->table.* FROM $this->table";
    }


    public function destroy()
    {
        $this->temp_query = "DELETE FROM $this->table WHERE $this->key = '$this->key_id'";
        return mysqli_query($this->conn,$this->temp_query);
       
    }

    public function exec()
    {
        $data = [];
        $q = mysqli_query($this->conn,$this->temp_query);
        while ($r = mysqli_fetch_array($q)) {
            # code...
            $data[] = $r;
        }
        $this->where = true;
        $this->temp_query = "SELECT $this->table.* FROM $this->table";
        $this->key_id = '';
        return $data;
    }


    public function dump()
    {
        return ($this->temp_query);
    }


}