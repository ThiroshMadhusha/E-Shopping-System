/*script for change now and upcoming deals*/
function loadData(data){
  if (data == myBtn1){
	var i = 1;
	var j = 0;
	var img = "";
	var path = "";	
		while(j < 10 & i < 11){
			img = "newsimg" + i;
			path = "../images/item" + i + ".png";
			document.getElementById(img).src = path;
			i++;
			j++;
		}	
  }	
 if (data == myBtn2){
	var i =10;
	var j = 1;
	var img = "";
	var path = "";	
		while(j < 11 && i > 0){
			img = "newsimg" + j;
			path = "../images/item" + i + ".png";
			document.getElementById(img).src = path;
			i--;
			j++;
		}	
  }
	
}

