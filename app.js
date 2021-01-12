
            function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";//as its disapear
}
function start(){
var butn=document.getElementById("sub")
butn.addEventListener("click",check,false)
}
function check(){
  var msg=document.getElementById("msg");
if(document.getElementById("name").value == "" || document.getElementById("name").value==null){
  alert("Name are required");
}
if(document.getElementById("eml").value == "" || document.getElementById("eml").value==null){
  alert("Email are required");
}   
if(document.getElementById("pass").value == "" || document.getElementById("pass").value==null){
  alert("Password are required");
}  
}

window.addEventListener("load",start,false);