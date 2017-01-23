<?php
 
?>
<script src="/POS2/Sources/Admin/assets/scripts/cat.js"></script>
    <form name="UpdateCat" id="UpdateCat" class="form" >
      <div class="form-group">
         <label for="id">Id:</label>
         <output type="text" class="form-control" id="id" name="id" value="<?php echo $cat->getId(); ?>" ><?php echo $cat->getId(); ?></output>
     </div>
     <div class="form-group">
         <label for="name">Name:</label><span id='user-exist'></span>
         <input type="text" class="form-control" id="name" name="name" value="<?php echo $cat->getName(); ?>" required="true">
     </div>
      
             
    <button type="submit" class="btn btn-default" id="update" name='update'>Update</button>
    </form>
  
    
        
