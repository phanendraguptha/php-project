function validate(){
  var password =document.forms[0].p.value;
  var cpassword =document.forms[0].cp.value;
  if(password==cpassword){
    alert("Signed Up Success");
  }
  else{
    alert("error");
  }
}