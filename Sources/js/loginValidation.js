     $( document ).ready(function() {
        // alert("99999999999999");
        $("#loginForm").validate({
           
            rules: {
                mail:{
                required:true,
                email:true
                 },
                password:{
                required:true
                 },
                 type:{
                     required:true,
                     radio:true
                 }
                 
            },
            messages :{
                mail:{
                    required:"email is required",
                    email:"enter a valid email"
                },
                password:{
                    required: "password is required"
                },
                type:{
                    required:"please select a type",
                }
                
            },

	
    });
    
 $("#login").submit(function(event){
    event.preventDefault();

    
    
        $.ajax({

        url: '/POS1/LoginController/LoginValidation',  
        type: "POST",
        data: 
        {
            email: $('#mail').val(),
            password: $('#password').val(),
            type:$('input:radio[name="type"]:checked').val()
        },
            success: function(data) 
            {
                  //alert("name"+data['email']+"|||");
                if (data=="success")
                {
                    
                    alert("you are added IN");
                     window.location.replace("/POS1/AdminController/index");
                    
                }
                else {

                    alert("sorry");
                }

            }
    
        });
    
  });
});
    
    
