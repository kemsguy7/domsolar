



                    <div class="col-lg-12">
                      

                        <h1 class="page-header">
                            Users
                         
                        </h1>
                          <p class="bg-success">
                            <?php display_message(); ?>
                        </p>

                        <a href="index.php?add_user" class="btn btn-primary">Add User</a>


                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <!--<th>Photo</th> -->
                                        <th>Username</th>
                                        <th>Email</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>

                             

                                    <tr>
                                        <?php display_users();  ?>
                                    </tr>




                                    
                                    
                                </tbody>
                            </table> <!--End of Table-->
                        

                        </div>
                        
                    </div>
    








