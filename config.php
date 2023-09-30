<?php
// <!-- Subtask 3 -->
try{
    $db_user="root";
    $db_name="salonDB";
    $db_pass="";
    
    // Datbase connection string
    $db = new PDO('mysql:host=localhost;dbname='. $db_name,$db_user,$db_pass);
    
}catch(Exception $e){

    echo "<h1>Error:". $e->getMessage() . "</h1><br>";;
    
}

?>