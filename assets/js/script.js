
var btn1= document.getElementById('send_btn');
var eye=document.getElementById('pass_icon');
var back_btn = document.getElementById('back_btn');
var email=document.getElementById('user_email');
var pass=document.getElementById('user_pass');
var user=document.getElementById('user_pass');
var Form_login = document.getElementById('forms');




if(btn1){
 btn1.addEventListener("click",validForm);}

 if(eye){
 eye.addEventListener("click",passView);}

 if(back_btn){
    back_btn.addEventListener("click", function(){
    window.location.href = 'users.php';});}

   
    function validForm(){
      var msj = document.getElementById("msjBox");
      if(email){
      var user = document.getElementById("user_name").value;}
      if(email){
            var email = document.getElementById("user_email").value;}
      if(pass){
            var pass = document.getElementById("user_pass").value; }
            
        if(user == "" || pass == "" || email =="" ){
            msj.textContent = "DATOS REQUERIDOS";
            
         }else{
            document.getElementById('forms').submit();
            form.submit();
         }
   }

     
   function passView(){

    var tipo = document.getElementById("user_pass");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}
