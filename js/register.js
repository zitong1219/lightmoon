window.onload = function(){
	btnControl = document.newRegister.elements.btnSubmit; 
	btnControl.disabled = true;
	btnControl.className = "btn btn-default nosubmit";
} 

function checktest()
{
  var returnValue=true;
  var formElements = document.newRegister.elements;
	//检查text文本区是否填写
  	for (var i=0; i<formElements.length; i++){
  		currentElement=formElements[i];
  			if (currentElement.value=="" && currentElement.className=="textInput form-control")
      	{
       		returnValue = false;
       		alert("warning：请完整填写");
       		currentElement.focus();
       		return returnValue;
      	}
  	}

	//检查是否填写有误
  	var username = newRegister.user_name.value;
  	var password1 = newRegister.Password1.value;
  	var password2 = newRegister.Password2.value;
  	if(password1 != password2) 
      {
        returnValue = false;
        alert("warning：两次输入的密码不一致");
        newRegister.user_name.value = "";
        newRegister.user_name.focus();
        return returnValue;
      }
      else
      {
        alert("检查成功！");
        newRegister.btnSubmit.disabled=false;
      }
}
