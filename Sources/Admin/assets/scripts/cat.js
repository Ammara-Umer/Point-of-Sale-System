 $(document ).ready(function() {
     $("#addcat").click(function(){
     $("#content").load('/POS2/CatagoryController/loadAddCatagoryView');
     });
      $("#delcat").click(function(){
     $("#content").load('/POS2/CatagoryController/loadDelCatagoryView');
     });
      $("#updatecat").click(function(){
     $("#content").load('/POS1/CatController/update');
     }); 
     $("#add").click(function(){
            $("#AddCat").submit(function(event){
            event.preventDefault();



                $.ajax({

                url: '/POS2/CatagoryController/isUniqueCatagory',  
                type: "POST",
                data: 
                {
                    name: $('#name').val()
                 
                },
                    success: function(data) 
                    {
                          //alert("name"+data['email']+"|||");
                        if (data.indexOf("success")>-1)
                        {
                            $("#content").load('/POS2/Views/General/Success.php');

                        }
                        else if(data.indexOf("exist")>-1)
                        {
                            $("#content").load('/POS2/Views/General/AlreadyExist.php');
                        }
                        else  {

                            alert("sorry");
                        }

                    }

                });

          });
             });
      $('.btn-danger').click(function(){
         
         var id =$(this).attr("id");
         
          $.ajax({

                url: '/POS2/CatagoryController/isCatagoryExist',  
                type: "POST",
                data: 
                {
                    id: id,
                 
                },
                    success: function(data) 
                    {
                          //alert("name"+data['email']+"|||");
                        if (data.indexOf("success")>-1)
                        {
                            $("#content").load('/POS2/Views/General/Success.php');

                        }
                        else if(data.indexOf("unavialable")>-1)
                        {
                            $("#content").load('/POS2/Views/General/AlreadyExist.php');
                        }
                        else  {

                            alert("sorry");
                        }

                    }

                });

          
         
      });
      $("#del").click(function(){
            $("#DelCat").submit(function(event){
            event.preventDefault();



                $.ajax({

                url: '/POS2/CatagoryController/isCatagoryExist',  
                type: "POST",
                data: 
                {
                    id: $('#id').val()
                 
                },
                    success: function(data) 
                    {
                         
                        if (data.indexOf("success")>-1)
                        {
                            $("#content").load('/POS2/Views/General/Success.php');

                        }
                        else if(data.indexOf("unavialable")>-1)
                        {
                            $("#content").load('/POS2/Views/General/AlreadyExist.php');
                        }
                        else  {

                            alert("sorry");
                        }

                    }

                });

          });
             });
     $('.btn-info').click(function(){
         
         var id =$(this).attr("id");
         
          $("#content").load('/POS2/CatagoryController/loadUpdateCatagoryView?id='+id);

         
      });
     $("#update").click(function(){
            $("#UpdateCat").submit(function(event){
            event.preventDefault();



                $.ajax({

                url: '/POS2/CatagoryController/updateCatagory',  
                type: "POST",
                data: 
                {
                    id:$("#id").val(),
                    name: $('#name').val()
                 
                },
                    success: function(data) 
                    {
                          //alert("name"+data['email']+"|||");
                        if (data.indexOf("success")>-1)
                        {
                            $("#content").load('/POS2/Views/General/Success.php');

                        }
                        else if(data.indexOf("exist")>-1)
                        {
                            $("#content").load('/POS2/Views/General/AlreadyExist.php');
                        }
                        else  {

                            alert("sorry");
                        }

                    }

                });

          });
             });
             
 
 });

