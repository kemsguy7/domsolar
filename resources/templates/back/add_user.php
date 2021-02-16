
<?php 
  
  add_user();  //defined in the function.php script

?> 

<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Add Users

</h1> 
</div>
               


<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-6">


    
    

</div><!--Main Content-->


<!-- SIDEBAR-->


<div class="col-md-6">

    <!-- Product Image -->
    <div class="form-group">
        
        <input type="file" name="file">
      
    </div>



    <div class="form-group">
           <label for="Username">Username</label>
           <input type="text" name="username" class="form-control">
    </div>
     
     <div class="form-group">
        <label for="email">Email</label>
           <input type="text" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
           <input type="password" name="password" class="form-control">
    </div>
    

    <div class="form-group"> 
      <a id="user-id" class="btn btn-danger" href="">Delete</a>
      <input type="submit" name="add_user" class="btn btn-primary pull-right" value="submit">
    </div>
  



</div>


    
</form>



                


