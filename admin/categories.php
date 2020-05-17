<?php include_once("includes/admin_header.php") ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once("includes/admin_navigation.php") ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>



                        <div class="col-xs-6">
                            
                            <!-- insert categories -->
                            <?php insert_categories(); ?>

                            <form action="categories.php" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Add Category</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                                

                            </form> <!-- Add category form -->
                            
                            <!-- edit categories -->
                            <?php edit_categories(); ?>
                            
                        </div>

                        <div class="col-xs-6">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <!-- find all categories -->
                                        <?php find_all_categories(); ?>
                                        
                                        <!-- delete categories -->
                                        <?php delete_categories(); ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include_once("includes/admin_footer.php") ?>
