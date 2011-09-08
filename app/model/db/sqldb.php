<?php

require_once 'app/config/dbconfig.php';

class SqlDB {
	private $conn;
	
	function __construct() {
		$this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
				die('There was a problem connecting to the database.');
	}
	
	function execute_query($query,$params,$close = false) {
		if($stmt = $this->conn->prepare($query)) {

			call_user_func_array(array($stmt, 'bind_param'), $this->refValues($params));
			$stmt->execute();
			
			if($close){
				$result = $mysqli->affected_rows;
			} else {
			$meta = $stmt->result_metadata();
			
			while ( $field = $meta->fetch_field() ) {
				$parameters[] = &$row[$field->name];
			}
			
			call_user_func_array(array($stmt, 'bind_result'), $this->refValues($parameters));
			
			while ( $stmt->fetch() ) {  
               $x = array();  
               foreach( $row as $key => $val ) {  
                  $x[$key] = $val;  
               }  
               $results[] = $x;  
            }

            $result = $results;
           }
           
           $stmt->close();
           if(empty($result)) $result = array();
           return  $result;
		}
	}
	
	
	function refValues($arr){
		if (strnatcmp(phpversion(),'5.3') >= 0) //Reference is required for PHP 5.3+
		{
			$refs = array();
			foreach($arr as $key => $value) {
			$refs[$key] = &$arr[$key];
			}
			return $refs;
		}
		return $arr;
	}	
}

