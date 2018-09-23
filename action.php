<?php

require_once('db.php');


class DataOperations extends Database{
    public function insert_record($table,$fields){
        $sql = "INSERT INTO ".$table;
        $sql .= " (".implode(",",array_keys($fields)).") VALUES";
        $sql .= " ('".implode("','",array_values($fields))."')";
        
       $query = mysqli_query($this->connection,$sql);
        
    }
    
    public function fetch_record($table){
    $sql= "SELECT * FROM ".$table;
    $array = array();
    $query = mysqli_query($this->connection,$sql);
    while($row=mysqli_fetch_assoc($query)){
        $array[] = $row; 
    }
    
    return $array;
   }
    
    
    public function find_by_id($table,$id)
    {
        $sql = "SELECT * FROM ".$table." where id=".$id;
        $myArray = array();
        $query = mysqli_query($this->connection,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $myArray[] = $row;
        }
        return $myArray;
    }
    
    
    
    public function select_record($table,$where){
        $sql = "";
        $condition="";
        
        foreach($where as $key=>$value){
            $condition .= $key."='".$value."' AND ";
        }
        $condition = substr($condition,0,-5);
        $sql .= "SELECT * FROM ".$table." where ".$condition;
        $query = mysqli_query($this->connection,$sql);
        $row = mysqli_fetch_array($query);
        return $row;
    }
    
    
    public function update_record($table,$where,$fields){
         $sql = "";
         $condition= "";
         foreach($where as $key=>$value){
                $condition .= $key."='".$value."' AND ";
         }
          $condition = substr($condition,0,-5);
         foreach($fields as $key=>$value){
               $sql .= $key."='".$value."', ";
         }
         $sql = substr($sql,0,-2);
         $sql = "UPDATE ".$table." SET ".$sql." WHERE ".$condition;
        echo $sql;
        if(mysqli_query($this->connection,$sql)){
            return true;
        }
    }
}







?>