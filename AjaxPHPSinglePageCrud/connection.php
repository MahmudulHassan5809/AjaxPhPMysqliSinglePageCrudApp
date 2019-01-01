<?php
ob_start();
$connection = new mysqli('localhost','root','','php_ajax');
if($connection){
   //echo "It Works";
  return true;
}else{
	echo "Conncection Failed";
	$error = $connection->connect_error;
	return false;
}


//Select Data From DataBase
function select($query){
	global $connection;
	global $error;
    $result = $connection->query($query) or
    die($error.__LINE__);
    if($result->num_rows > 0){
        return $result;
    } else {
        return false;
    }
}


//Insert Data TO DataBase
function insert($query){
	global $connection;
	global $error;
    $insert_row = $connection->query($query) or
       die($error.__LINE__);
    if($insert_row){
       return $insert_row;
    } else {
       return false;
    }
}

function update($query){
	global $connection;
	global $error;
    $update_row = $connection->query($query) or
       die($error->error.__LINE__);
    if($update_row){
      return $update_row;
    } else {
      return false;
    }
}


function delete($query){
	global $connection;
	global $error;
    $delete_row = $connection->query($query) or
       die($error->error.__LINE__);
    if($delete_row){
       return $delete_row;
    } else {
       return false;
    }
}
