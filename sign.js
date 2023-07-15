// done by smarth and daksh sharma.
const form =document.querySelector("#form");
let email=document.querySelector("#username-login");
let pass=document.querySelector("#password");
let pass1=pass.value;
let Telephone=document.querySelector("#Telephone");
let password2=document.querySelector("#password2");
let defaultMSg="";
// addinf events

email.addEventListener('blur',event =>{
    validate_email();
});
pass.addEventListener('blur',event =>{
    validate_pass();
});
Telephone.addEventListener('blur',event =>{
        validate_tel();
    });
password2.addEventListener('blur',event =>{
        validate_pass2();
    });
  

//validate function
function validate_email(){
  
let emailValidation=validateEmail();
 var liElements = document.querySelectorAll(".cwarning");
 if (liElements.length > 0) {
   document.querySelector('.cwarning').remove();
   }
    if(emailValidation =="false"){    
      defaultMSg="X Email address should be non-empty with the format xyz@xyz.xyz";    
      let emailError=document.createElement('span');
      emailError.setAttribute("class","cwarning");
      document.querySelectorAll(".input-control-1")[0].append(emailError);   
      emailError.textContent = defaultMSg;  
    }
}
function validateEmail(){
    let email1 = email.value;
   // access the value of the email
    let regexp=/\S+@\S+\.\S+/; //reg. expression 
  
    if(regexp.test(email1)){ //test is predefiend method to check if the entered email matches the regexp
      bool1="true";
    }
    else {
      bool1="false";
    }
    return bool1;
    
}


  
    
function validate_pass(){
    var liElements = document.querySelectorAll(".ewarning");
    if (liElements.length > 0) {
      document.querySelector('.ewarning').remove();
      }//validating password
    let passValidation=validatepass();
    if(passValidation =="false"){
      defaultMSg="X password should be atleast 6 characters; 1 Uppercase, 1 Lowercase";    
      let PassError=document.createElement('span');
      PassError.setAttribute("class","ewarning");
      document.querySelectorAll(".input-control-3")[0].append(PassError);   
      PassError.textContent = defaultMSg; 
      console.log(defaultMSg); 

    }
    if(passValidation =="true"&&emailValidation =="true"){
        return "true";
    }
    
  
    
}
function validatepass(){
    let pass1 = pass.value;
   
    if(pass1.length>=6&&pass1!=""){ 
      bool1="True";
      console.log("hellooooo");
      
    }
    else {
      bool1="false";
    }
    return bool1;
    
  }
  // checking if both passwords match
function validate_pass2(){
    var liElements = document.querySelectorAll(".e2warning");
    if (liElements.length > 0) {
      document.querySelector('.e2warning').remove();
      }//validating password
    let passValidation2=validatepass2();
    if(passValidation2 =="False"){
        console.log("hello pass333");
      defaultMSg="X password doesnot match";    
      let telerror=document.createElement('span');
      telerror.setAttribute("class","e2warning");

      document.querySelectorAll(".input-control-4")[0].append(telerror);   
      telerror.textContent = defaultMSg; 
      console.log(defaultMSg); 

    }
    
    
  
    
}
function validatepass2(){
    let pass=document.querySelector("#password");
    let pass1=pass.value;
var pass2= password2.value;
console.log(pass1);
    console.log(pass2);
if(pass2===pass1&&pass2!=''){ //test is predefiend method to check if the entered email matches the regexp
    bool1="true";
    
    

    
  }
  else {
    bool1="False";
  }
  return bool1;   
}
function validate_tel(){
    var liElements = document.querySelectorAll(".twarning");
    if (liElements.length > 0) {
      document.querySelector('.twarning').remove();
      }//validating password
    let telValidation=validatetel();
    if(telValidation =="false"){
      defaultMSg="X telephone not valid";    
      let Pass2Error=document.createElement('span');
      Pass2Error.setAttribute("class","twarning");
      document.querySelectorAll(".input-control-2")[0].append(Pass2Error);   
      Pass2Error.textContent = defaultMSg; 
      console.log(defaultMSg); 

    }
    
    
  
    
}
function validatetel(){
    let telephone1 = Telephone.value;
 
    if(telephone1.length>=10&&telephone1!=""){ //test is predefiend method to check if the entered email matches the regexp
      bool1="True";
      console.log("hellbbjhkbnjkh o");
      
    }
    else {
      bool1="false";
    }
    return bool1;   
}






