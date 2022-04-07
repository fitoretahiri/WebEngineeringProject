
    function isValidEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
      };

      function validatePhoneNumber(telephone) {
    var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    return re.test(telephone);
}
     
      const form = document.querySelector("form[name='contact-form']");
      const thankU=document.querySelector(".thankU-div");
      const nameInput=document.querySelector('input[name="name"]');
      const emailInput=document.querySelector('input[name="email"]');
      const telInput=document.querySelector('input[name="telephone"]');
      const messageInput=document.querySelector('textarea[name="comments"]');
      
     const inputs=[nameInput,emailInput,telInput,messageInput];
     

      let isFormValid=false;
      let isValidationOn=false;

      const resetElm=(elm)=>{
           elm.classList.remove("invalid");
        elm.nextElementSibling.classList.add("hidden");

      };

      const invalidateElm=(elm)=>{
        elm.classList.add("invalid");
     elm.nextElementSibling.classList.remove("hidden");
    };
      

      const validoInputin =()=> {
          if(!isValidationOn)return;
        isFormValid=true;
        //resetElm(nameInput);
        //resetElm(emailInput);
        //resetElm(telInput);
        //me shkurt:
        inputs.forEach(resetElm);


        if(!nameInput.value){ 
             isFormValid=false;
            invalidateElm(nameInput);
          }

          if(!isValidEmail(emailInput.value)){ 
             isFormValid=false;
            invalidateElm(emailInput);
          }

          if(!validatePhoneNumber(telInput.value)){ 
            isFormValid=false;
           invalidateElm(telInput);
         }

         if(!messageInput.value){ 
            isFormValid=false;
           invalidateElm(messageInput);
         }
      };

      form.addEventListener("submit", (e)=> {
          e.preventDefault(); //qe mos me u refresh faqja
          isValidationOn=true;
          validoInputin();
          if(isFormValid){
              form.remove(); //e fshin komplet input formen dhe shfaqet thank u message
              thankU.classList.remove("hidden");
          }
      });

      //mos me qit te kuqe kur shkrujme emrin
      inputs.forEach((input) => input.addEventListener("input", validoInputin));
      
      document.getElementById("myButton").onclick=function(){
        var name= document.getElementById("name").value;
        var email= document.getElementById("email").value;
        var tel= document.getElementById("tel").value;
        var organization= document.getElementById("organization").value;
        var comment= document.getElementById("comments").value;

        console.log("Name:",name);
        console.log("Email:",email);
        console.log("Tel:",tel);
        console.log("Organization:",organization);
        console.log("Comment:",comment);
      }


