function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var id = getElement("id");
	

	if(ename.value == ""){
		hasErr= true;
		err_ename.innerHTML = "Employee Name Required";
		ename.focus();
		return !hasErr;
	}

	if(email.value == ""){
		hasErr= true;
		err_email.innerHTML = "Email Required";
		email.focus();
		return !hasErr;
	}

	if(birth_date.value == ""){
		hasErr= true;
		err_birth_date.innerHTML = "Employee birth date Required";
		birth_date.focus();
		return !hasErr;
	}

	if(phone.value == ""){
		hasErr= true;
		err_phone.innerHTML = "Employee phone Required";
		phone.focus();
		return !hasErr;
	}

	if(salary.value == ""){
		hasErr= true;
		err_salary.innerHTML = "Employee salary Required";
		salary.focus();
		return !hasErr;
	}

	if(address.value == ""){
		hasErr= true;
		err_address.innerHTML = "Employee address Required";
		address.focus();
		return !hasErr;
	}

	if(join_date.value == ""){
		hasErr= true;
		err_join_date.innerHTML = "Employee join date Required";
		join_date.focus();
		return !hasErr;
	}
	
		
	return !hasErr;

}
function refresh(){
	
	var err_ename = getElement("err_ename");
	var err_email = getElement("err_email");
	var err_birth_date = getElement("err_birth_date");
	var err_phone = getElement("err_phone");
	var err_salary = getElement("err_salary");
	var err_address = getElement("err_address");
	var err_join_date = getElement("err_join_date");
	
	
	err_ename.innerHTML = "";
	err_email.innerHTML = "";
	err_birth_date.innerHTML = "";
	err_phone.innerHTML = "";
	err_salary.innerHTML = "";
	err_address.innerHTML = "";
	err_join_date.innerHTML = "";
	
	
}