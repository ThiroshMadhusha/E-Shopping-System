function checkpassword() {

		if (document.getelEmentById("pwd").value != document.getElementById("cnfirmpwd").value){
			alert("password mismatch");
			return false;
		}else{
			alert("correct password");
			return true;
}