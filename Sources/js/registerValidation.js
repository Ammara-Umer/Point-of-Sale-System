 $( document ).ready(function() {
         
        $("#regForm").validate({
           
            rules: {
                email:{
                required:true,
                email:true
                 },
                password:{
                required:true,
                minlength: 8
                 },
                 name:{
                     required:true,
                     maxlength:50
                 },
                 address:{
                     required: true,
                     maxlength:200
                 }
            },
            messages :{
                email:{
                    required:"email is required",
                    email:"enter a valid email"
                },
                password:{
                    required: "password is required",
                    minlength:"password must be of 8 characters"
                },
                name:{
                    required: "must enter name",
                    maxlength: "name must have max lenght 50 characters"
                },
                address:{
                    required: "address is required",
                    maxlength:" address should not be greater then 200 characters"
                }
                
            }

	
    });
 $("#email").blur(function(event){
     event.preventDefault();
     $.ajax({
         url:'/POS1/LoginController/EmailValidation',
         type:"POST",
         data:{
             email:$("#email").val()
         },
         success:function(data){
             if(data=="OK"){
                 $("#user-exist").html("<p> email available </p>");
             }
             else{
                 $("#user-exist").html("<p> email unavailable </p>");
             }
         }
     })
 })
 $("#regForm").submit(function(event){
             // alert($('#type').val());
    event.preventDefault();
    if( $("#regForm").valid() ) {
            $.ajax({

            url:'/POS1/LoginController/SignUp',
            type: "POST",
            data: 
            {
                  email: $('#email').val(),
                  password: $('#password').val(),
                  name: $('#name').val(),
                  address: $('#address').val(),
                  type:$('input:radio[name="type"]:checked').val()
                  
            },
             success:function(data){
              if (data.indexOf("success")>-1)
              {
                 $("#user-reg").html("<p> user Register </p>");
                 window.location.replace("/POS1/LoginController/Login");
               ///console.log(responce);
             }
             else{
                 $("#user-reg").html("<p> user can't be Register </p>")
                 //console.log(responce);
               
             }
         }
          });
    }
    else
    {
        alert("ENTER VALID VALUES: ")
    }
    });
    });