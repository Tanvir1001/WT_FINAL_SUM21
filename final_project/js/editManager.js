function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var id = getElement("id");
	

	if(mname.value == ""){
		hasErr= true;
		err_mname.innerHTML = "Manager Name Required";
		mname.focus();
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
		err_birth_date.innerHTML = "Manager birth date Required";
		birth_date.focus();
		return !hasErr;
	}

	if(phone.value == ""){
		hasErr= true;
		err_phone.innerHTML = "Manager phone Required";
		phone.focus();
		return !hasErr;
	}

	if(salary.value == ""){
		hasErr= true;
		err_salary.innerHTML = "Manager salary Required";
		salary.focus();
		return !hasErr;
	}

	if(address.value == ""){
		hasErr= true;
		err_address.innerHTML = "Manager address Required";
		address.focus();
		return !hasErr;
	}
	
		
	return !hasErr;

}
function refresh(){
	
	var err_mname = getElement("err_mname");
	var err_email = getElement("err_email");
	var err_birth_date = getElement("err_birth_date");
	var err_phone = getElement("err_phone");
	var err_salary = getElement("err_salary");
	var err_address = getElement("err_address");
	
	
	
	err_mname.innerHTML = "";
	err_email.innerHTML = "";
	err_birth_date.innerHTML = "";
	err_phone.innerHTML = "";
	err_salary.innerHTML = "";
	err_address.innerHTML = "";
	
	
	
}