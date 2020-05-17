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
                    
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php 
                                
                                $query = "SELECT * FROM posts";
                                $select_all_post = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_assoc($select_all_post)) {
                                    
                                }
                                ?>
                                <tr>
                                    <td>10</td>
                                    <td>Bootstrap</td>
                                    <td>Bootstrap ss</td>
                                    <td>title</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                        

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
