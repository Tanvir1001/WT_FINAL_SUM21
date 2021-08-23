<?php

require_once 'models/db_config.php';
session_start();
if (isset($_POST['submit']))
{

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username && $password)
    {

        $sql = "SELECT * FROM admins WHERE username = '$username'";
        $result = getData($sql);

        if (mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $db_password = $row['password'];
            $status = $row['status'];

            if (password_verify($password, $db_password))
            {
                if ($status == "Admin")
                {
                    $_SESSION['admin_username'] = $username;
                    header("location:dashboard.php");
                }
                
            }
            else
            {
                $_SESSION['error'] = "password not match";
                header("location:login.php");
                exit();
            }

        }
        else
        {
            $_SESSION['error'] = "Invalid Username";
            header("location:login.php");
            exit();
        }

    }
}

?>