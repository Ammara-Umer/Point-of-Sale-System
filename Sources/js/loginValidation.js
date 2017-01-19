 $( document ).ready(function() {
         
        $("#loginForm").validate({
           
            rules: {
                email:{
                required:true,
                email:true
                 },
                password:{
                required:true,
                
                 }
            },
            messages :{
                email:{
                    required:"email is required",
                    email:"enter a valid email"
                },
                password:{
                    required: "password is required",
                  
                }
                
            }

	
    });
 
 $("#login").submit(function(event){
             // alert($('#type').val());
    event.preventDefault();
    if( $("#loginForm").valid() ) {
            $.ajax({

            url:'/POS2/LoginController/Login',
            type: "POST",
            data: 
            {
                  email: $('#email').val(),
                  password: $('#password').val(),
                  type:$('input:radio[name="type"]:checked').val()   
            },
            
          });
    }
    else
    {
        alert("ENTER VALID VALUES: ");
    }
    });
    });