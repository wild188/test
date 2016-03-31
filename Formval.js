/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function userVal(form1){
    var letters= /^[A-Za-z]+$/;
    if(form1.myusername.value.length < 1){
        alert("You must enter your username");
        form1.myusername.focus();
        return false;
    }
    if(form1.mypassword.value.length < 3 ){
        alert("Your password must be at least 3 characters and match the second entry");
        return false;
    }
    if(!form1.firstName.value.match(letters) || form1.firstName.value.length < 3){
        alert("Your First name must be at least 3 characters in length and comprised of letters.");
        form1.firstName.focus();
        return false;
    }
    if(!form1.lName.value.match(letters) || form1.lName.value.length < 3){
        alert("Your Last name must be at least 3 characters in length and comprised of letters.");
        form1.lName.focus();
        return false;
    }
    if(form1.dob.value.length !== 10){
        alert("D.O.B. is too short");
        form1.dob.focus();
        return false;
    }
    if(form1.creditcard.value < 1000000000000000){
        alert("Your credit card number is not long enough");
        form1.creditcard.focus();
        return false;
    }
    if(form1.email.value.length < 3 || !isEmail(form1.email.value)){
        alert("Email invalid. Please enter a valid email.");
        form1.email.focus();
        return false;
    }
  
    return true;
}

function isEmail(input){
    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(input)){
        return true;
    }
    else{
        return false;
    }
}


function orderVal(form1){
    var letters= /^[A-Za-z]+$/;
    if(form1.section.value <1){
    	alert("You must enter a section number");
        form1.section.focus();
        return false;
    }
    if(form1.row.value <1){
    	alert("You must enter a row number");
        form1.row.focus();
        return false;
    }
    if(form1.seat.value <1){
    	alert("You must enter a seat number");
        form1.seat.focus();
        return false;
    }
    var hotdogs = form1.dogs.value;
    var burgers = form1.burgers.value;
    
    if((hotdogs + burgers) <1){
    	alert("You must at least one Frank or Burger");
        form1.dogs.focus();
        return false;
    }
  
    return true;
}