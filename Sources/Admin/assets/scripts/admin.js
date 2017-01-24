 $(document ).ready(function() {
     
     $("#mpc").click(function(){
     $("#content").load('/POS2/AdminController/productCatagoriesManagment');
     });
     $("#mp").click(function(){
     $("#content").load('/POS2/Views/Admin/ProductsManagment.php');
     });
     $("#mpr").click(function(){
     $("#content").load('/POS2/Views/Admin/ProductCatagoryManagment.php');
     });
     $("#ms").click(function(){
     $("#content").load('/POS2/Views/Admin/ProductCatagoryManagment.php');
     }); 
 
 });