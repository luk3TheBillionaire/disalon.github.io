        //    Subtask 3
           //When the register button is clicked call the  
            document.getElementById('register').addEventListener('click',()=>{
                return Registration(this.form)
            })

            //When enter is clicked
            document.getElementById('form-btn').addEventListener('keydown',(e)=>{
                if (e.target.value='Enter')return Registration(this.form)
            })

            
            /************************************FUNCTIONS*******************************************/

            //Registration function 
            function Registration(form){

                const user = {
                    'name':"",
                    'Surname':"",
                    'PhoneNumber':0,
                    'Email': "",
                    'Gender':"",
                };

                // Call the string validation function and text if name and surname are valid text
                if (stringValidation(form.userName,form.userSurname)){

                    // assign the name and surname to the "user" object
                    user.name=form.userName.value.trim();
                    user.Surname=form.userSurname.value.trim();

                } else {
                    //Return false
                    return false;
                }

                if(numberValidation(form.userPhone)){
                    user.PhoneNumber=form.userPhone.value.trim();
                } 
                else {
                    return false
                }
                if (!form.Gender.value){
                    // Using sweet a
                    Swal.fire('Select Gender') 
                   return false 
                }  else {
                    user.Gender=form.Gender.value
                }

                // Validate email
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(form.userEmail.value.match(mailformat))
                {
                user.Email=form.useremail.value
                }
                else
                {
                Swal.fire("You have entered an invalid email address!");
                 return false;
                }

                //Open The make booking window when all validation is done
                window.open('/makebooking.html')
                return true
            
            };

            //String Validation for the name and surname values
            function stringValidation(nameInput,surnameInput){

                //Try catch
                try{
                    //make vairables for name and surname values
                    const name =nameInput.value.trim(),
                    surname=surnameInput.value.trim();

                    //Check if name or surname values are empty 
                    if (name==="" || surname===""){
                        throw ('Check surname and name fields');
                    };

                    //Check if there is an int value in the name
                    for(let i=0;i<name.length;i++){
                        if(parseInt(name[i])){
                            throw ('Enter A valid name');
                        };
                    };
            
                    //Check if there is an int value in the surname
                    for(let i=0;i<surname.length;i++){
                        if(parseInt(name[i])){
                        throw ('Enter A valid surname');
                        };
                    };
                return true
            
                }catch(ex){
        
                    // Show alert
                    Swal.fire({
                        ex                        
                    });
                    return false
                };
            };

            //Function to validate phone numbers
         function numberValidation(numberInput){
                
                // Try catch
                try{
                    //assign number input to number 1
                    const number1 = numberInput.value.trim();

                    // Check if the length aof the number is less than 10
                    if(number1.lenght<10){
                                  throw "Enter a valid phone number";
                    }
       
                    // Check if contains only numbers
                    if(number1.match('/[A-Za-z]/')){
                        console.log(number1)
                        throw "Enter a valid phone number 2";
                    }


                    return true
                }catch(ex){
                    numberInput.focus()
                    Swal.fire(ex)
                    return false
                }
            };