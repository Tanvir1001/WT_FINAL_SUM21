<?php
	
	require_once 'models/db_config.php';
	$mid="";
	$err_mid="";
	$mname="";
	$err_mname="";
	$email = "";
	$err_email = "";
	$gender="";
	$err_gender="";
	$birth_date ="";
	$err_birth_date ="";
	$phone = "";
	$err_phone = "";
	$salary = "";
	$err_salary = "";
	$address = "";
	$err_address = "";
	
	
	$has_error = false;
	
	if(isset($_POST["submit"])){
		if(empty($_POST["mid"])){
			$err_mid=" *Manager ID Required";
			$has_error = true;
		}
		else{
			$mid=htmlspecialchars($_POST["mid"]);
		}

		if(empty($_POST["mname"])){
			$err_mname=" *Manager Name required";
			$has_error = true;
		}
		else{
			$mname=htmlspecialchars($_POST["mname"]);
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

		if(!isset($_POST["gender"])){
			$err_gender="  *Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}

		if(empty($_POST["salary"])){
			$err_salary=" *Salary required";
			$has_error = true;
		}
		else{
			$salary=htmlspecialchars($_POST["salary"]);
		}

		if(empty($_POST["address"])){
			$err_address=" *Address required";
			$has_error = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
		}


		
		
		if(!$has_error){
			$mid= $_POST["mid"];
			$mname= $_POST["mname"];
			$email= $_POST["email"];
			$gender= $_POST["gender"];
			$birth_date= $_POST["birth_date"];
			$phone= $_POST["phone"];
			$salary= $_POST["salary"];
			$address= $_POST["address"];
			

			addmanager($mid,$mname,$email,$gender,$birth_date,$phone,$salary,$address);
			header("Location: Manager_info.php");
		}
	}
	
	function addmanager($mid,$mname,$email,$gender,$birth_date,$phone,$salary,$address)
	{
		
		$query= "INSERT INTO managers VALUES ('$mid','$mname','$email','$gender','$birth_date','$phone','$salary','$address')";
		execute($query);	
	}


	if(isset($_POST["Edit"])){
	

		if(empty($_POST["mname"])){
			$err_mname=" *Manager Name required";
			$has_error = true;
		}
		else{
			$mname=htmlspecialchars($_POST["mname"]);
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

		if(!isset($_POST["gender"])){
			$err_gender="  *Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}

		if(empty($_POST["salary"])){
			$err_salary=" *Salary required";
			$has_error = true;
		}
		else{
			$salary=htmlspecialchars($_POST["salary"]);
		}

		if(empty($_POST["address"])){
			$err_address=" *Address required";
			$has_error = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
		}


		
		
		if(!$has_error){
			
			$mid= $_GET["id"];
			$mname= $_POST["mname"];
			$email= $_POST["email"];
			$gender= $_POST["gender"];
			$birth_date= $_POST["birth_date"];
			$phone= $_POST["phone"];
			$salary= $_POST["salary"];
			$address= $_POST["address"];
			

			editmanager($mid,$mname,$email,$gender,$birth_date,$phone,$salary,$address);
			
		}
	}
	

	

	function getallmanager()
	{
		
		$query="select * from managers";
		$result=get($query);
		return $result;
	}
	
	
	function editmanager($mid,$mname,$email,$gender,$birth_date,$phone,$salary,$address){
        $query="UPDATE managers SET mname='$emname',email='$email',gender=$gender,birth_date='$birth_date',phone='$phone',salary='$salary',address='$address' WHERE mid='$mid'";
		$ex= execute($query);
		if($ex){
			header("Location: Manager_info.php");
		}
		else {
			echo "Fail to Update";
		}
    }
    

    function deletemanager($mid)
	{
		$query="DELETE FROM managers WHERE mid='$mid'";
		execute($query);
	}


	function Getuser($id)
	{
		$sql = "SELECT * FROM managers WHERE mid='$id'";
		$result = get($sql);

		return $result;
	}
?>