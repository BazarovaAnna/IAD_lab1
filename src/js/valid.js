
function checkValue(){
	var y=document.getElementById("check");
	if(y.value<=-3 || y.value>=5 || y.value=="(-3...5)" || isNaN(y.value) || y.value.trim()==""){
		alert("ОЙ-ЁЙ\nНеправильно введен Y");
	}
}


/**/
/**/
