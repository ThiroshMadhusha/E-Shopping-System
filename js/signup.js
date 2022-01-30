function checkpassowrd() {

	if(document.getElementById("pwd").value != document.getElementById("crmpwd").value){
		alert("password Missmatch!");
		return false;
	}
	else{
		alert("Success!");
		return true;
	}
	
}

function enableButton(){

	if(document.getElementById("checkbox").checked)
		{
			document.getElementById("submitbtn").disabled=false;
		}
	else{
			document.getElementById("submitbtn").disabled=true;
		}
}

function sendButton(){

	if (document.getElementById("tel").validity.patternMismatch){
        			document.getElementById("send").disabled = true;
            }
	else{
		document.getElementById("send").disabled=false;
 }
}