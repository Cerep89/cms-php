


<div class="col-md-4">
    <?php


    ?>
    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
        <div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
        </div>
        <!-- /.input-group -->
        </form><!--/. form -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">

        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                <?php
                $query = "SELECT * FROM categories";
                $mysql_query_categories = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($mysql_query_categories)) {
                    ?>

                        <li><a href="#"><?= $row['cat_title'] ?></a>
                        </li>


                    <?php
                }
                ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
            <!--<div class="col-lg-6">
                <ul class="list-unstyled">
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                </ul>
            </div>-->
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
<?php include 'includes/widget.php' ?>

</div>

</div>