<?php

if(!function_exists('connectdb')) {
    function connectdb() {
        $dburl = "mysql:host=localhost;dbname=du_an_11;charset=utf8;'root';''";
        $username1 = 'root';
        $password1 = '';
    
        $conn = new PDO($dburl, $username1, $password1);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
    

if(!function_exists('db_execute')){
    
    function db_execute($sql) {
        $sql_args = array_slice(func_get_args(), 1);
          try{
            $conn = connectdb();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
          }
          catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
        }

}

if(!function_exists('db_query')){
    function db_query($sql){
        // $sql_args = array_slice(func_get_args(), 0);
        try{
            $conn = connectdb();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetchAll();
            return $rows;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
}

if(!function_exists('db_query_one')){
    
    function db_query_one($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = connectdb();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
}

if(!function_exists('db_query_value')){
    function db_query_value($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = connectdb();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

}
if(!function_exists('db_execute_return_lastInsertId')){
    function db_execute_return_lastInsertId($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = connectdb();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            return $conn->lastInsertId();
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
}



   
   
 

?>