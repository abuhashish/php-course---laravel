<?php 
namespace TechStore\Classes\Models;
use TechStore\Classes\Db;

    class Product extends Db {
        public function __construct()
        {
            $this->table='products';
            $this->connect();
        }

        public function selectId($id,$fields="*"){
     $sql="SELECT $fields FROM $this->table JOIN cats 
on $this->table.cat_id=cats.id  where $this->table.id =$id";
            $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);//one row
    
        }


        public function selectAll($fields="*"){
            $sql="SELECT $fields FROM $this->table
            JOIN cats 
            on $this->table.cat_id=cats.id
            ";
            $result=mysqli_query($this->conn,$sql);
         return mysqli_fetch_all($result,MYSQLI_ASSOC);//assoc array
        }
    
    }
?>