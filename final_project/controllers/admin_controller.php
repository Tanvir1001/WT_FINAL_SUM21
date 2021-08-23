<?php
	
	include 'models/db_config.php';
	$aid="";
	$err_aid="";
	$aname="";
	$err_aname="";
    $username="";
	$err_username="";
    $password="";
	$err_password="";
	$email = "";
	$err_email = "";
	$birth_date ="";
	$err_birth_date ="";
	$phone = "";
	$err_phone = "";
	$address = "";
	$err_address = "";
	
	
	$has_error = false;
	
	if(isset($_POST["submit"])){
		if(empty($_POST["aid"])){
			$err_aid=" *Admin ID Required";
			$has_error = true;
		}
		else{
			$aid=htmlspecialchars($_POST["aid"]);
		}

		if(empty($_POST["aname"])){
			$err_aname=" *Admin Name required";
			$has_error = true;
		}
		else{
			$aname=htmlspecialchars($_POST["aname"]);
		}
		if(empty($_POST["username"])){
			$err_username=" *Username required";
			$has_error = true;
		}
		elseif(strlen($_POST["username"]) < 4){
			$err_username="*Username must be 4 characters";
			$has_error = true;
		}
		else{
			$username=htmlspecialchars($_POST["username"]);
		}
        //Password
		if(empty($_POST["password"])){
		$err_password=" *Password required";
		$has_error = true;
		}
		elseif(strlen($_POST["password"]) < 6){
		$err_password=" *Password must be 6 characters long";
		$has_error = true;
		}
		else{
		$password=htmlspecialchars($_POST["password"]);
		}
		if(empty($_POST["birth_date"])){
			$err_birth_date = "*Day, Month, Year required";
			$has_error = true;
		}
		else{
			$birth_date=htmlspecialchars($_POST["birth_date"]);
		}

		
		if(empty($_POST["phone"]))
		{
			$err_phone = " *Number required ";
		}
		else if(!is_numeric($_POST["phone"]))
		{
			$err_phone = " *Numeric charecter required ";
		}
		else{ $phone = htmlspecialchars($_POST["phone"]);}

		if(empty($_POST["email"]))
		{
			$err_email = "*Email required";
			$has_error=true;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				if($str[$i] == ".")
					{
						$flag = true;break;
					}
			}
			if($flag == true)
				{
					$email = htmlspecialchars($_POST["email"]);
				}
			else{
				$err_email = "*Invalid email";
				$has_error=true;
			}
		}

		if(empty($_POST["address"])){
			$err_address=" *Address required";
			$has_error = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
		}


		
		
		if(!$has_error){
			$aid= $_POST["aid"];
			$aname= $_POST["aname"];
            $username= $_POST["username"];
            $password= $_POST["password"];
			$email= $_POST["email"];
			$birth_date= $_POST["birth_date"];
			$phone= $_POST["phone"];
			$address= $_POST["address"];
			

			addadmin($aid,$aname,$username,$password,$email,$birth_date,$phone,$address);
			header("Location: Admin_info.php");
		}
	}
	
	function addadmin($aid,$aname,$username,$password,$email,$birth_date,$phone,$address)
	{
		
		$query= "INSERT INTO admins VALUES ('$aid','$aname','$username','$password','$email','$birth_date','$phone','$address')";
		execute($query);	
	}


	if(isset($_POST["Edit"])){

		if(empty($_POST["aname"])){
			$err_aname=" *Admin Name required";
			$has_error = true;
		}
		else{
			$aname=htmlspecialchars($_POST["aname"]);
		}
		if(empty($_POST["username"])){
			$err_username=" *Username required";
			$has_error = true;
		}
		elseif(strlen($_POST["username"]) < 4){
			$err_username="*Username must be 4 characters";
			$has_error = true;
		}
		else{
			$username=htmlspecialchars($_POST["username"]);
		}
        //Password
		if(empty($_POST["password"])){
		$err_password=" *Password required";
		$has_error = true;
		}
		elseif(strlen($_POST["password"]) < 6){
		$err_password=" *Password must be 6 characters long";
		$has_error = true;
		}
		else{
		$password=htmlspecialchars($_POST["password"]);
		}
		if(empty($_POST["birth_date"])){
			$err_birth_date = "*Day, Month, Year required";
			$has_error = true;
		}
		else{
			$birth_date=htmlspecialchars($_POST["birth_date"]);
		}

		
		if(empty($_POST["phone"]))
		{
			$err_phone = " *Number required ";
		}
		else if(!is_numeric($_POST["phone"]))
		{
			$err_phone = " *Numeric charecter required ";
		}
		else{ $phone = htmlspecialchars($_POST["phone"]);}

		if(empty($_POST["email"]))
		{
			$err_email = "*Email required";
			$has_error=true;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				if($str[$i] == ".")
					{
						$flag = true;break;
					}
			}
			if($flag == true)
				{
					$email = htmlspecialchars($_POST["email"]);
				}
			else{
				$err_email = "*Invalid email";
				$has_error=true;
			}
		}

		if(empty($_POST["address"])){
			$err_address=" *Address required";
			$has_error = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
		}

		
		
		if(!$has_error){
			
			$aid= $_GET["id"];
			$aname= $_POST["aname"];
            $username= $_POST["username"];
            $password= $_POST["password"];
			$email= $_POST["email"];
			$birth_date= $_POST["birth_date"];
			$phone= $_POST["phone"];
			$address= $_POST["address"];
			

			editadmin($aid,$aname,$username,$password,$email,$birth_date,$phone,$address);
			
		}
	}
	

	function getalladmin()
	{
		
		$query="select * from admins";
		$result=get($query);
		return $result;
	}
	
	
	function editadmin($aid,$aname,$username,$password,$email,$birth_date,$phone,$address){
        $query="UPDATE admins SET aname='$aname',username='$username',password='$password',
		email='$email',birth_date='$birth_date',phone='$phone',
		address='$address' WHERE aid='$aid'";
        $ex= execute($query);
		if($ex){
			header("Location: Admin_info.php");
		}
		else {
			echo "Fail to Update";
		}
    }
    

    function deleteadmin($aid)
	{
		$query="DELETE FROM admins WHERE aid='$aid'";
		execute($query);
	}


	function Getuser($id)
	{
		$sql = "SELECT * FROM admins WHERE aid='$id'";
		$result = get($sql);

		return $result;
	}
?>