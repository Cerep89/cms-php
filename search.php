<!--Include php header-->
<?php
include 'includes/db.php';
?><?php
include 'includes/header.php';
?>

<?php
include 'includes/navigation.php';
?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            <?php

            if (isset($_POST['submit'])){
                $search = $_POST['search'];
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
                $search_query = mysqli_query($connection, $query);
                if (!$search_query){
                    die("Query failed ". mysqli_error($connection));
                }
                $count = mysqli_num_rows($search_query);
                if ($count==0){
                    echo "<h1>No result</h1>";
                }else{



            while ($row = mysqli_fetch_assoc($search_query)){?>


                <h2>
                    <a href="#"><?= $row['post_title'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?= $row['post_author'] ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?= $row['post_date'] ?></p>
                <hr>
                <img class="img-responsive" src="images/<?= $row['post_image'] ?>" alt="">
                <hr>
                <p><?= $row['post_content'] ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                <?php
            }
                }
            }
            ?>
            <!-- Second Blog Post -->


            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include 'includes/sidebar.php'; ?>
        <!-- /.row -->

        <hr>

        <!--Include php footer-->
<?php
include 'includes/footer.php';