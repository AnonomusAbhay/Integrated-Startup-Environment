
      const FullName= document.querySelector("#FullName");
      const email = document.querySelector("#email");
      const passconf=document.querySelector("#passconf");
      const iconnamef = document.querySelector(".iconnamef");
      const iconnamet = document.querySelector(".iconnamet");
      const iconpassf = document.querySelector(".iconpassf");
      const iconpasst = document.querySelector(".iconpasst");
      const iconconpassf= document.querySelector(".iconconpassf");
      const iconconpasst= document.querySelector(".iconconpasst");
      const icon1 = document.querySelector(".icon1");
      const icon2 = document.querySelector(".icon2");
     const icon1_1 = document.querySelector(".icon1-1");
      const icon2_1 = document.querySelector(".icon2-1");
      const icon1_2 = document.querySelector(".icon1_2");
      const icon2_2 = document.querySelector(".icon2_2");
      const error = document.querySelector(".error-text");
      const errorname=document.querySelector(".error-text-name");
       const errorpass=document.querySelector(".error-text-pass");
        const errorconpass=document.querySelector(".error-text-conpass");
       const error1 = document.querySelector(".error-text1");
       const error2 = document.querySelector(".error-text2");
       const error3 = document.querySelector(".error-text3");
      var username=document.querySelector("#username");
      var pass=document.querySelector("#pass");
      var regpass=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
      let regname= /^[a-zA-Z]+ [a-zA-Z]+$/;
      let regExp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      let reguname=/^[a-zA-Z0-9]+$/;
      function check() {
         
        if (email.value.match(regExp)) {
      
          icon1_1.style.display = "none";
          icon2_1.style.display = "block";
          error1.style.display = "none";
          
        } else {
   
          icon1_1.style.display = "block";
          icon2_1.style.display = "none";
          error1.style.display = "block";
         document.getElementById("errormsg1").innerHTML="Please Enter valid Email";
          
        }
        if (email.value == "") {
       
          icon1_1.style.display = "none";
          icon2_1.style.display = "none";
          error1.style.display = "none";
       
        }
      }
      function validateFullName() {
        if (FullName.value.match(regname) ) {
           iconnamef.style.display = "none";
           iconnamet.style.display = "block";
          errorname.style.display = "none";
        }else{
              iconnamef.style.display = "block";
          iconnamet.style.display = "none";
          errorname.style.display = "block";
         document.getElementById("errormsgname").innerHTML="Please Enter valid First and Last name";
          }
            if (FullName.value == "") {
          iconnamef.style.display = "none";
          iconnamet.style.display = "none";
          errorname.style.display = "none";
       
        }
      }

      function validate(){
                     
          if(username.value.match(reguname) ){
         icon1.style.display = "none";
          icon2.style.display = "block";
          error.style.display = "none";
          }else{
               icon1.style.display = "block";
          icon2.style.display = "none";
          error.style.display = "block";
         document.getElementById("errormsg").innerHTML="Username can only contain Letters and Numbers ";
          }
            if (username.value == "") {
          icon1.style.display = "none";
          icon2.style.display = "none";
          error.style.display = "none";
       
        }}
    
        function passvalidate(){
          
           
          if(pass.value.match(regpass)){
            iconpassf.style.display = "none";
          iconpasst.style.display = "block";
          errorpass.style.display = "none";
          
        } else {
       
          iconpassf.style.display = "block";
          iconpasst.style.display = "none";
          errorpass.style.display = "block";
         document.getElementById("errormsgpass").innerHTML="Enter strong pass with  8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character";
         
        }
        if (pass.value == "") {
          iconpassf.style.display = "none";
          iconconpasst.style.display = "none";
          errorpass.style.display = "none";
       
        }
        }
        function passvalidateconf(){
                 if(passconf.value == pass.value){
            iconconpassf.style.display = "none";
          iconconpasst.style.display = "block";
          errorconpass.style.display = "none";
          
        } else {
       
          iconconpassf.style.display = "block";
          iconconpasst.style.display = "none";
          errorconpass.style.display = "block";
         document.getElementById("errormsgconpass").innerHTML="Password do not match ";
         
        }
        if (pass.value == "") {
          iconconpassf.style.display = "none";
          iconconpasst.style.display = "none";
          errorconpass.style.display = "none";
       
        }
          
        }
        
         
      

