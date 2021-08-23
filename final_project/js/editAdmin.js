function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var id = getElement("id");
	

	if(aname.value == ""){
		hasErr= true;
		err_aname.innerHTML = "Admin Name Required";
		aname.focus();
		return !hasErr;
	}

    if(username.value == ""){
		hasErr= true;
		err_username.innerHTML = "Admin Userame Required";
		username.focus();
		return !hasErr;
	}

    if(password.value == ""){
		hasErr= true;
		err_password.innerHTML = "Admin Password Required";
		password.focus();
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
		err_birth_date.innerHTML = "Admin birth date Required";
		birth_date.focus();
		return !hasErr;
	}

	if(phone.value == ""){
		hasErr= true;
		err_phone.innerHTML = "Admin phone Required";
		phone.focus();
		return !hasErr;
	}

	
	if(address.value == ""){
		hasErr= true;
		err_address.innerHTML = "Admin address Required";
		address.focus();
		return !hasErr;
	}
	
		
	return !hasErr;

}
function refresh(){
	
	
	var err_aname = getElement("err_aname");
    var err_username = getElement("err_username");
    var err_password = getElement("err_password");
	var err_email = getElement("err_email");
	var err_birth_date = getElement("err_birth_date");
	var err_phone = getElement("err_phone");
	var err_address = getElement("err_address");
	
	
	
	err_aname.innerHTML = "";
    err_username.innerHTML = "";
    err_password.innerHTML = "";
	err_email.innerHTML = "";
	err_birth_date.innerHTML = "";
	err_phone.innerHTML = "";
	err_address.innerHTML = "";
	
	
	
}