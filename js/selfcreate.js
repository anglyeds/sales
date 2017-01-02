


function isNumberKey(evt,id) {
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46)
     return false;
 else {
     var len = document.getElementById(id).value.length;
     var index = document.getElementById(id).value.indexOf('.');
     
     if (index > 0 && charCode == 46) {
         return false;
     }
     if (index > 0) {
         var CharAfterdot = (len + 1) - index;
         if (CharAfterdot > 3) {
             return false;
         }
     }
 }
 return true;
	}


function changeToUpperCase(t) {
   var eleVal = document.getElementById(t.id);
   eleVal.value= eleVal.value.toUpperCase();
}