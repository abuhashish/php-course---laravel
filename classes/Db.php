<?php 
namespace TechStore\Classes;
abstract class Db {
    protected $conn;
    protected $table;
    public function connect(){
     $this->conn=mysqli_connect(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);
    }

    public function selectAll($fields="*"){
        $sql="SELECT $fields FROM $this->table";
        $result=mysqli_query($this->conn,$sql);
     return mysqli_fetch_all($result,MYSQLI_ASSOC);//assoc array
    }

    public function selectId($id,$fields="*"){
        $sql="SELECT $fields FROM $this->table where id =$id";
        $result=mysqli_query($this->conn,$sql);
    return mysqli_fetch_assoc($result);//one row

    }
    
    public function selectWhere($cond,$fields="*"){
        $sql="SELECT $fields FROM $this->table where $cond";
        $result=mysqli_query($this->conn,$sql);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function getCount(){
        $sql="SELECT count(*) AS cnt FROM $this->table";
        $result=mysqli_query($this->conn,$sql);
    return mysqli_fetch_assoc($result)['cnt'];
    }
    

    public function insert($fields,$value){
        $sql="INSERT INTO $this->table($fields) VALUES($value)";
     if(mysqli_query($this->conn,$sql)){
         echo "ok";
     } 
     else {
         echo mysqli_error($this->conn);
     }
    }

    public function insertAndGetId($fields,$value){
        $sql="INSERT INTO $this->table($fields) VALUES($value)";
       mysqli_query($this->conn,$sql); 
       return mysqli_insert_id($this->conn);
    }

    

    public function update($set,$id){
        $sql="UPDATE $this->table SET $set
        where id=$id";
        return mysqli_query($this->conn,$sql);
    
}

    public function delete($id){
        $sql="DELETE from $this->table where id=$id";
        return mysqli_query($this->conn,$sql);
    }

}

?>