//_____________________________________________________________________________________________



//new modifications from naoufal

 //signup and login forms 
 const signup_form = document.getElementById("signup_from");
 const login_form = document.getElementById('login_form');

 // signup form elements : 
   const nomfd = document.getElementById("Nom");
   const prenomfd = document.getElementById("Prenom");
   const emailfd = document.getElementById("Email");
   const passwordfd = document.getElementById("Password");
   const passwordConffd = document.getElementById("Confirm_Pw");

 signup_form.addEventListener('submit',e=>{
  console.log("test");
   if(!validateInputs()){
     e.preventDefault();
   }
   });




 function showSuccessMessage() {
   console.log('the function is called');
   var messageElement = document.getElementById("signup_message");
   messageElement.classList.add('success_signup');
   messageElement.textContent = "Signup Successful";
   messageElement.style.display = "block";

   // Hide the message after 3 seconds
   setTimeout(function() {
       messageElement.style.display = "none";
   }, 3000);
}

 





//useful functions
 const isValidEmail = email => {
   const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   return re.test(String(email).toLowerCase());
}

function isValidePassword(password) {
 const passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
 return passwordRegex.test(password);
}


function setError(element,message){
 const inputControl = element.parentElement;
 const errorDisplay = inputControl.querySelector('.error');
 errorDisplay.innerText = message;
 inputControl.classList.add('error');
 inputControl.classList.remove('success');
}
function setSuccess(element){
 const inputControl = element.parentElement;
 const errorDisplay = inputControl.querySelector('.error');
 errorDisplay.innerText = '';
 inputControl.classList.add('success');
 inputControl.classList.remove('error');
}

function validateInputs(){
 //get fields values : 
 let formIsValid = true;
 let nom= nomfd.value.trim();
 let prenom= prenomfd.value.trim();
 let email= emailfd.value;
 let password= passwordfd.value.trim();
 let passwordConf= passwordConffd.value.trim();
 // valider le nom
 if(nom === ''){
   setError(nomfd,"Tu doit entrer votre nom");
   formIsValid = false;
 }else{
   setSuccess(nomfd);
 }
 // valider le prenom
 if(prenom === ''){
   setError(prenomfd,"Tu doit entrer votre prenom");
   formIsValid= false;
 }else{
   setSuccess(prenomfd);
 }
 
 // valider le email
 if(email === '' || !isValidEmail(email)){
   setError(emailfd,"Tu doit rentre une adresse email valide");
   formIsValid = false;
 }else{
   setSuccess(emailfd);
 }
 // valider le mot de passe
 if(password === '' || !isValidePassword(password)){
   setError(passwordfd,"Tu doit entrer un mot de passe qui contient au moin un nombre un symbole et de longuere superieur à 8");
   formIsValid = false;
 }else{
   setSuccess(passwordfd);
 }
 if(passwordConf === password && isValidePassword(password)){
   setSuccess(passwordConffd);
 }else{
   setError(passwordConffd,"Pas le meme mot de passe");
   formIsValid = false;
 }

 return formIsValid;
}
