<?php
    $db_server="localhost";
    $db_username="root";
    $db_password="";
    $db_name="project_db";

    function execute($query){
        global $db_server,$db_username,$db_password,$db_name;
        $conn=mysqli_connect($db_server,$db_username,$db_password,$db_name);
        if($conn){
            if(mysqli_query($conn,$query)){
                return true;
            }
            else{
                return mysqli_error($conn);
            }
        }
    }

   
    function get($query){
   
        global $db_server,$db_username,$db_password,$db_name;
        $conn=mysqli_connect($db_server,$db_username,$db_password,$db_name);
        if($conn){
            $result = mysqli_query($conn,$query);
            mysqli_close($conn);
            return $result;
        }
    }
?>