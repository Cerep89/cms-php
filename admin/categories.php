<?php include 'includes/admin_header.php' ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php" ?>
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Wolcome to admin
                        <small>Author</small>
                    </h1>
                    <div class="col-xs-6">
                        <?php
                        if (isset($_POST['submit'])){
                            $cat_title = $_POST['cat_title'];
                            if ($cat_title==''|| empty($cat_title)){
                                echo "This field not be empty";
                            }else{
                                $query = "INSERT INTO categories(cat_title)";
                                $query .= "VALUES('{$cat_title}')";
                                $ceate_category_query = mysqli_query($connection,$query);
                                if (!$ceate_category_query){
                                    die("Failed" .mysqli_error($connection));
                                }
                            }
                        }
                        ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add Category </label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="submit" value="add categori">
                            </div>
                        </form>
                    </div><!--/.form add category-->
                    <div class="col-xs-6">

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cat title</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            /* Fiand all categories */
                            $query = "SELECT * FROM categories";
                            $select_all_categories_query = mysqli_query($connection,$query);
                            while ($row = mysqli_fetch_assoc($select_all_categories_query)){
                               $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                echo  "<tr>";
                                echo "<td>{$cat_id}</td>";
                                echo "<td>{$cat_title}</td>";
                                echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                            <?php
                            if (isset($_GET['delete'])){
                                $the_cat_id = $_GET['delete'];
                                $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
                                $query__conection = mysqli_query($connection, $query);
                                header("Location: categories.php");
                            }
                            ?>
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
    <?php include "includes/admin_footer.php" ?>
