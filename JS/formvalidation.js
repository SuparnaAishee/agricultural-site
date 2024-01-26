function validateform(){
    var fname=document.myform.fname.value;  
    var lname = document.myform.lname.value;  
    var number = document.myform.number.value;
     var category = document.myform.category.value;
       var regNumber = /^\d{10}$/;  
if (fname==null || fname==""){  
  alert("Name can't be blank");  
  return false;  
}
if (lname == null || lname == "") {
  alert("Name can't be blank");
  return false;
}

 if (category.selectedIndex == -1) {
   alert("Please enter your course.");

   return false;
 }
 if (number == "" || !regNumber.test(number)) {
   alert("Please enter valid phone number.");
  
   return false;
 }
}  

