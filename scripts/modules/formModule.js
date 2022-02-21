//== TODO: Implement session handling, message author link handling

//== NOTE: User feedback on failures / could be great too.

async function formModule() {
   const forms = document.forms;

   for (let i=0 ; i<forms.length ; i++) {
      const currentForm = forms[i];

      currentForm.addEventListener("submit", (e) => {
         e.preventDefault();
         const formData = document.querySelectorAll(`form[name=${currentForm.name}] input`)

         if (currentForm.name === "chat") {
            if(formData[0].value !== "") {
               sendMessageAttempt(currentForm);
               formData[0].value = "";
            }
         }
         else if (currentForm.name === "register") {
            const failedConstraint = registerValidation(formData);
            if (failedConstraint === "") {
               registerAttempt(currentForm);
            }
            else {
               formAnim(currentForm, false, "register", failedConstraint)
            }
         }
         else if (currentForm.name === "login") {
            loginAttempt(currentForm);            
         }
         else if (currentForm.name === "update") {
         }
      })
   }
}

async function registerAttempt(form) {
   const formattedFormData = new FormData(form);
   const answer = await queryControler([`type=registerUser`], formattedFormData);

   if (answer.check_success) {
      formAnim(form, true, "register");
   } else {
      formAnim(form, false, "register");
   }
}
async function loginAttempt(form) {
   const formattedFormData = new FormData(form);
   const answer = await queryControler([`type=loginUser`], formattedFormData);

   if (answer.logged) { 
      localStorage.setItem("userData", JSON.stringify(answer));
      formAnim(form, true, "login");

      setTimeout(() => location.reload(), 1150);
   } else {
      formAnim(form, false, "login");
   }
}
async function updateAttempt(form) {
   const formattedFormData = new FormData(form);
   const answer = await queryControler([`type=updateUser`], formattedFormData);

   if (answer.check_success) {
      formAnim(currentForm, true, "update");
   } else {
      //== TODO: User Feedback on failed constraints
   }
}
async function sendMessageAttempt(form) {
   const formattedMessage = new FormData(form);

   if (adminRole) {
      const target = localStorage.getItem("currentTarget");
      await queryControler([
         `type=updateUser`,
         `target=${target}`
      ], formattedMessage);

      fetchMessages(target);
   } else {
      await queryControler([`type=createMessage`], formattedMessage);
      
      fetchMessages();
   }

}