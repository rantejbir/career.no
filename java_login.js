// this part is done by smarth Sharma
const form =document.querySelector("#form");
let email=document.querySelector("#username-login");
let pass=document.querySelector("#password");
let defaultMSg="";
// adding event listener
email.addEventListener('blur',event =>{
    validate_email();
  
});
// adding a event listener
pass.addEventListener('blur',event =>{
    validate_pass();});
  
// validating a email
//validate function
function validate_email(){
  
let emailValidation=validateEmail();
// removing a error
 var liElements = document.querySelectorAll(".cwarning");
 if (liElements.length > 0) {
   document.querySelector('.cwarning').remove();
   }
  //  printing error if condition is false
    if(emailValidation =="false"){    
      defaultMSg="X Email address should be non-empty with the format xyz@xyz.xyz";    
      let emailError=document.createElement('span');
      emailError.setAttribute("class","cwarning");
      document.querySelectorAll(".input-control-1")[0].append(emailError);   
      emailError.textContent = defaultMSg;  
    }
}

  
    // validating a password
function validate_pass(){
  // removing a error
    var liElements = document.querySelectorAll(".ewarning");
    if (liElements.length > 0) {
      document.querySelector('.ewarning').remove();
      }
      //validating password
      // printing error if condition is false
    let passValidation=validatepass();
    if(passValidation =="false"){
      defaultMSg="X password should be atleast 6 characters; 1 Uppercase, 1 Lowercase";    
      let PassError=document.createElement('span');
      PassError.setAttribute("class","ewarning");
      document.querySelectorAll(".input-control-2")[0].append(PassError);   
      PassError.textContent = defaultMSg; 
      console.log(defaultMSg); 

    }
    
    
}

// function to check email
function validateEmail(){
    let email1 = email.value;
   
    let regexp=/\S+@\S+\.\S+/; //reg. expression 
  
    if(regexp.test(email1)){ //test is predefiend method to check if the entered email matches the regexp
      bool1="true";
    }
    else {
      bool1="false";
    }
    return bool1;
    
}


// function rto check password
function validatepass(){
  let pass1 = pass.value;
 
  if(pass1.length>=6&&pass1!=""){ //test is predefiend method to check if the entered email matches the regexp
    bool1="True";
    console.log("hellooooo");
    
  }
  else {
    bool1="false";
  }
  return bool1;
  
}
