 <?php


// namespace;

 class DB{

    public $sql;
    public $onnection;

    public function __construct()
    {
        $this->connection=mysqli_connect("localhost","root","","odc");
    }

    public function select($table,$column){
        $this->sql = "SELECT $column FROM `$table`";

        return $this;
    }

    public function first(){
        $query = mysqli_query($this->connecton,$this->sql);
        mysqli_fetch_assoc($query);
    }

    public function all(){
        $query = mysqli_query($this->connecton,$this->sql);
        mysqli_fetch_all($query);
    }
    
    public function delete($table){
        $this->sql = "DELETE FROM `$table` ";
        return $this;
    }

    public function where($column , $compaire ,$value){
        $this->sql .= "WHERE `$column` $compaire '$value'";
        return $this;
    }

    public function insert($table,$data){

        $columns = "";
        $values  = "";

        foreach($data as $key => $value){
            $columns .="`$key` ,";
            $values .="'$value' ,";
        }

        $columns =rtrim($columns,",");
        $values =rtrim($values,",");

        $this->sql = "INSERT INTO `$table`($columns) VALUE ($values)";
        return $this;
    }

    public function update($table,$data){

        $rows = "";
        foreach($data as $key => $value){
            $rows .="`$key` = '$value'";
        }
        $rows =rtrim($rows,",");

        $this->sql ="UPDATE `$table` SET $rows";

        return $this;
    }

    public function excute(){
        mysqli_query($this->connection,$this->sql);
        return mysqli_affected_rows($this->connection);
    }

 }