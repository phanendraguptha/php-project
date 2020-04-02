// number of persons
var number=document.getElementById("number");
var minus=document.getElementById("minus");
var plus=document.getElementById("plus");
minus.addEventListener("click", function(){
   if(number.value>=1)
   {
      number.stepDown(1);
   }
});
plus.addEventListener("click", function(){
   
      number.stepUp(1);
});
function abc() {
// validation for cost
  var from=document.getElementById("from");
  var fromVal = from.options[from.selectedIndex].value;
  var to=document.getElementById("to");
  var toVal = to.options[to.selectedIndex].value;
  if(fromVal=="Tirupati"&&toVal=="Rajahmundry")
  {
     var val=document.querySelector("#cost");
     val.innerHTML="cost is <b>"+number.value*1000+"<b>";
  }
  if(fromVal=="Tirupati"&&toVal=="Amaravathi")
  {
     var val=document.querySelector("#cost");
     val.innerHTML="cost is <b>"+number.value*1500+"<b>";
  }
  if(fromVal=="Vizag"&&toVal=="Rajahmundry")
  {
     var val=document.querySelector("#cost");
     val.innerHTML="cost is <b>"+number.value*2000+"<b>";
  }
  if(fromVal=="Vizag"&&toVal=="Amaravathi")
  {
     var val=document.querySelector("#cost");
     val.innerHTML="cost is <b>"+number.value*2500+"<b>";
  }
};

