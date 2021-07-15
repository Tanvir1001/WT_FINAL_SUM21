<?php
    include 'models/db_config.php';
    $name="";
    $err_name="";
    $username="";
    $err_username="";
    $email="";
    $err_email="";
    $pass="";
    $err_pass="";
    $err_db="";

    $hasError=false;

    if(isset($_POST["signup"])){
        if(empty($_POST["name"])){
            $hasError=true;
            $err_name="Name Required";
        }
        else{
            $name=$_POST["name"];
        }

        if(empty($_POST["username"])){
            $hasError=true;
            $err_username="Username Required";
        }
        else{
            $username=$_POST["username"];
        }

        if(empty($_POST["email"])){
            $hasError=true;
            $err_email="Email Required";
        }
        else{
            $email=$_POST["email"];
        }

        if(empty($_POST["pass"])){
            $hasError=true;
            $err_pass="Password Required";
        }
        else{
            $pass=$_POST["pass"];
        }

        if(!$hasError){
            $rs = insertUser ($name,$username,$email,$pass);
            if($rs===true){
                header("location:login.php");
            }
            $err_db=$rs;
        }
    }
    elseif(isset($_POST["log_in"])){
        if(empty($_POST["username"])){
            $hasError=true;
            $err_username="Username Required";
        }
        else{
            $username=$_POST["username"];
        }
        if(empty($_POST["pass"])){
            $hasError=true;
            $err_pass="Password Required";
        }
        else{
            $pass=$_POST["pass"];
        }
        if(!$hasError){
            if(authenticateUser($username,$pass)){
                header("location:dashboard.php");
            }
            $err_db="Username and Password invalid";
        }
    }

    function insertUser($name,$username,$email,$pass){
        $query= "insert into users values (NULL,'$name','$username','$email','$pass')";
        return execute($query);
    }

    function authenticateUser($username,$pass){
        $query = "select * from users where Username='$username' and Password='$pass'";
        echo $query;
        $rs = get($query);
        if(count($rs) > 0) {
            return true;
        }
        return false;
    }
?>