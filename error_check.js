/*"use strict";
var $ = function(id) { return document.getElementById(id); 
};
alert("AHAHAHAHAH");
function validateForm() {
 if ($("product_description").value != "Guitars" && $("product_description").value != "Pianos"
 && $("product_description").value != "Other"){
 	alert("Product description  must be guitars or pianos or others.");
 	$("product_description").value = ""; //sets the value to blank and won't sumbit to serveer
 	return false;
   }//if
  
  if(isNaN($("list_price"))){
  	alert("List price is not a number");
  	$("list_price").value = ""; //sets the value to blank and won't sumbit to serveer
 	return false;
  }
  
  
}//validate form
*/

var $ = function(id) {
    return document.getElementById(id);
};
function validateForm() {
    if($("product_description").value!="Guitars" && $("product_description").value!="Pianos"
    && $("product_description").value!="Other"){
        alert("Product description Must be Guitars OR Pianos OR Others");
        $("product_description").value="";
        return false;
    }//if
    var list_price = parseFloat($("list_price").value);
    if(isNaN(list_price) || list_price < 0){
        alert("List Price must be a positive number.");
        $("list_price").value = "";
        return false;
    }//if
    
    var discount_percent = parseFloat($("discount_percent").value);
    if(isNaN(discount_percent) || discount_percent < 0 || discount_percent > 100){
    	alert("Discount percent must be a positive number less than 100.");
    	$("discount_price").value = "";
    	return false;
    }//if
    
}//validateForm
