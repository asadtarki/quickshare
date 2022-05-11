const loginbutton=document.getElementById('loginbutton');
const email=document.getElementById('email');
const password=document.getElementById('password');
loginbutton.classList.add('disbutton')
let emailstate=false;
let passwordstate=false;
const regex=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


email.addEventListener('keyup',()=>{
   if(email.value.match(regex)){
        emailstate=true
        changestate();
   }
   else{
    emailstate=false
    changestate();
   }
  
})

password.addEventListener('keyup',()=>{
       if(password.value.length>6){
            passwordstate=true
            changestate();
       }
       else{
        passwordstate=false
        changestate();
       }
      
    })

function changestate(){
    if(emailstate==true && passwordstate==true){
        loginbutton.disabled =false;
        loginbutton.classList.remove('disbutton');
        loginbutton.classList.add('enablebutton');
    }
    else{
        loginbutton.disabled =true;
        loginbutton.classList.remove('enablebutton');
        loginbutton.classList.add('disbutton');
    }
}