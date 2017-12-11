function formFunction(){
	var name = document.myform.username.value;
	var showData = "Username : "+name;
	document.getElementById('output').innerHTML = showData;

}


function clickHere(){

	var genderlen = document.myform2.gender.length;
	for(i=0; i<genderlen; i++){
		var checkValue = document.myform2.gender[i].checked;

		if (checkValue) {
			var checkResult = document.myform2.gender.value;
		}

	}
	var showData = "Your Gender is : "+checkResult;
	document.getElementById('show').innerHTML = showData;

}




function multipleCheck(){

	var lanlen = document.myform4.code.length;
	var $checkResult= "";
	for(i=0; i<lanlen; i++){
		var checkValue = document.myform4.code[i].checked;

			if (checkValue) {
			 $checkResult += document.myform4.code[i].value+", ";
		}

	}
	var showData = "You selected : "+$checkResult;
	document.getElementById('state').innerHTML = showData;

}


function selectOption(){

	var index = document.myform8.coder8.selectedIndex;
	var value = document.myform8.coder8.options[index].value;
	var showData = "You are selected : "+value;
	document.getElementById('option').innerHTML = showData;

}



function fullForm(){
	var getname = document.myform9.name.value;
	document.getElementById('showName').innerHTML =getname;

	var getpass = document.myform9.Password.value;
	document.getElementById('showPass').innerHTML =getpass;


	var genderLen = document.myform9.gender.length;
	for ( i = 0; i<genderLen; i++) {
		var checkGender= document.myform9.gender[i].checked;
		if(checkGender){
			gendValue= document.myform9.gender[i].value;
		}
		
	}
	document.getElementById('showGender').innerHTML =gendValue;




	var depLen = document.myform9.dep.length;
		for ( i = 0; i<depLen; i++) {
			var checkDep= document.myform9.dep[i].checked;
			if(checkDep){
				depValue= document.myform9.dep[i].value;
			}
			
		}
		document.getElementById('showDep').innerHTML =depValue;


		var index = document.myform9.coder9.selectedIndex;
		var coderValue = document.myform9.coder9.options[index].value;
		document.getElementById('showCode').innerHTML =coderValue;

}