<?php


class db{

    public $connection;
    public  $query;
    public $sql;

    public function __construct(){
        $this->connection =mysqli_connect("localhost","root","","odc");
    }

    public function first(){
        $query =mysqli_query($this->connection,$this->sql);
        mysqli_fetch_assoc($query);
    }

    public function All(){
        $query =mysqli_query($this->connection,$this->sql);
        mysqli_fetch_all($query,MYSQLI_ASSOC);
    }

    public function select($table,$column){
        $this->sql ="SELECT $column FROM `$table`";
        return $this;
    }

    public function where($column,$compair,$value)
    {
        $this->sql .= " WHERE  `$column` $compair '$value'";
        return $this;
    }

    public function andWhere($column,$compair,$value){
        $this->sql .="AND `$column` $compair '$value' ";
        return $this;
    }

    public function orWhere($column,$compair,$value){
        $this->sql .="OR `$column` $compair '$value'";
        return $this; 
    }
    //multi demantion array
    public function getAll(){
        $this->query= mysqli_query($this->connection,$this->sql);
        while ($row = mysqli_fetch_assoc($this->query)) {
            $data[]=$row;
        }
        return $data;
    }
    // one array
    public function getRow(){
        $this->query= mysqli_query($this->connection,$this->sql);
        $row = mysqli_fetch_assoc($this->query);
            
        return $row;
    }

    public function insert($table,$data){

        $columns = "" ;
        $values  = "" ;

        foreach($data as $key => $value){
            $columns .=" `$key` , ";
            $values .=" `$value` , ";
        }

        $columns = rtrim($columns ,",");
        $values = rtrim($values ,",");

        $this->sql ="INSERT INTO $table ($columns) VALUE ($values)";

        return $this;
    }

    public function Updata($table,$data){

        $row  = "" ;
        foreach($data as $key => $value){
            $row .=" `$key` = '$value' , ";
        }

        $row = rtrim($row ,",");

        $this->sql ="UPDATE  $table SET $row";

        return $this;
    }

    public function Delete($table){

        $this->sql = "DELETE FROM $table ";
        return $this;
    }

    public function excute(){
        $this->sql =mysqli_query($this->connection,$this->sql);
       
        if(mysqli_affected_rows($this->connection) > 0){
            return true;
        }else{
            return false;
        }
    }
   
}
