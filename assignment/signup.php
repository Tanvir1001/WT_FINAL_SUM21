<?php
    include 'controllers/userController.php';
?>

<html>
<head>
    <title>Sign-Up</title>
</head>
<body>
    <h2>Sign-Up</h2>
    <h5><?php echo $err_db; ?></h5>
    <form action="" method="post">
    Name:<input type="text" name="name" value="<?php echo $name;?>" >
    <span><?php echo $err_name;?></span> <br><br>
    Username:<input type="text" name="username" value="<?php echo $username;?>" >
    <span><?php echo $err_username;?></span> <br><br>
    Email:<input type="text" name="email" value="<?php echo $email;?>" >
    <span><?php echo $err_email;?></span> <br><br>
    Password:<input type="text" name="pass" >
    <span><?php echo $err_pass;?></span> <br><br>
    <input type="submit" name="signup"value="Sign-Up">
    </form>
</body>
</html>