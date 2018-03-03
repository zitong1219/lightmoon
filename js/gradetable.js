function addClass() {
    var tr=document.createElement("tr");  
    var td1=document.createElement("td");  
    var td2=document.createElement("td");  
    td1.innerHTML="<input type=\"text\" name=\"newcourses[]\" class=\"form-control\">";  
    td2.innerHTML="<input type=\"text\" name=\"newgrades[]\" class=\"form-control\">"; 
    var td3=document.createElement("td");  
    td3.innerHTML="<button type=\"button\" class=\"btn btn-danger\" onclick=\"deleteclass(this)\">删除</button>";  
    var tbody=document.getElementById('gradetable');
    tbody.appendChild(tr);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
}

function deleteclass(dethis){ 
    var a=dethis.parentNode.parentNode;
    var delete_course = a.firstElementChild.innerHTML;   
    a.parentNode.removeChild(a); 
    this.location = "deletegrade.php?delete_course="+delete_course;
}

function ale(str){
    alert(str);
}