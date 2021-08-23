<?php
	
	require_once 'models/db_config.php';
	$eid="";
	$err_eid="";
	$ename="";
	$err_ename="";
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
	$join_date ="";
	$err_join_date ="";
	
	$has_error = false;
	
	if(isset($_POST["submit"])){
		if(empty($_POST["eid"])){
			$err_eid=" *Employee ID Required";
			$has_error = true;
		}
		else{
			$eid=htmlspecialchars($_POST["eid"]);
		}

		if(empty($_POST["ename"])){
			$err_ename=" *Employee name required";
			$hasError = true;
		}
		else{
			$ename=htmlspecialchars($_POST["ename"]);
		}
		
		if(empty($_POST["birth_date"])){
			$err_birth_date = "*Day, Month, Year required";
			$hasError = true;
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
			$hasError = true;
		}
		else{
			$salary=htmlspecialchars($_POST["salary"]);
		}

		if(empty($_POST["address"])){
			$err_address=" *Address required";
			$hasError = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
		}

		if(empty($_POST["join_date"])){
			$err_join_date = "*Day, Month, Year required";
			$hasError = true;
		}
		else{
			$join_date=htmlspecialchars($_POST["join_date"]);
		}

		
		
		if(!$has_error){
			$eid= $_POST["eid"];
			$ename= $_POST["ename"];
			$email= $_POST["email"];
			$gender= $_POST["gender"];
			$birth_date= $_POST["birth_date"];
			$phone= $_POST["phone"];
			$salary= $_POST["salary"];
			$address= $_POST["address"];
			$join_date= $_POST["join_date"];

			addemployee($eid,$ename,$email,$gender,$birth_date,$phone,$salary,$address,$join_date);
			header("Location: Employee_info.php");
		}
	}
	
	function addemployee($eid,$ename,$email,$gender,$birth_date,$phone,$salary,$address,$join_date)
	{
		
		$query= "INSERT INTO employees VALUES ('$eid','$ename','$email','$gender','$birth_date','$phone','$salary','$address','$join_date')";
		execute($query);	
	}


	if(isset($_POST["Edit"])){
		

		if(empty($_POST["ename"])){
			$err_ename=" *Employee Name required";
			$hasError = true;
		}
		else{
			$ename=htmlspecialchars($_POST["ename"]);
		}
		
		if(empty($_POST["birth_date"])){
			$err_birth_date = "*Day, Month, Year required";
			$hasError = true;
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
			$hasError = true;
		}
		else{
			$salary=htmlspecialchars($_POST["salary"]);
		}

		if(empty($_POST["address"])){
			$err_address=" *Address required";
			$hasError = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
		}

		if(empty($_POST["join_date"])){
			$err_join_date = "*Day, Month, Year required";
			$hasError = true;
		}
		else{
			$join_date=htmlspecialchars($_POST["join_date"]);
		}

		
		
		if(!$has_error){
			
			$eid= $_GET["id"];
			$ename= $_POST["ename"];
			$email= $_POST["email"];
			$gender= $_POST["gender"];
			$birth_date= $_POST["birth_date"];
			$phone= $_POST["phone"];
			$salary= $_POST["salary"];
			$address= $_POST["address"];
			$join_date= $_POST["join_date"];

			editemployee($eid,$ename,$email,$gender,$birth_date,$phone,$salary,$address,$join_date);
			
		}
	}
	

	

	function getallemployee()
	{
		
		$query="select * from employees";
		$result=get($query);
		return $result;
	}
	
	
	function editemployee($eid,$ename,$email,$gender,$birth_date,$phone,$salary,$address,$join_date){
        $query="UPDATE employees SET ename='$ename',email='$email',gender=$gender,
		birth_date='$birth_date',phone='$phone',
		salary='$salary',address='$address',join_date='$join_date' WHERE eid='$eid'";
        $ex = execute($query);
		if($ex){
			header("Location: Employee_info.php");
		}
		else {
			echo "Fail to Update";
		}
    }
    

    function deleteemployee($eid)
	{
		$query="DELETE FROM employees WHERE eid='$eid'";
		execute($query);
	}


	function Getuser($id)
	{
		$sql = "SELECT * FROM employees WHERE eid='$id'";
		$result = get($sql);

		return $result;
	}

?>