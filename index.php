<?php
include('includes/header.php');
include_once('database/functions.php');
?>

<main role="main">

    <?php include('includes/jumbotron.php');?>

    <div class="container">

        <!-- Example row of columns -->
        <div class="row">
            <?php
            $result = getAllJobs();
            foreach ($result as $r) { ?>
            <div class="col-md-10">
                <h2>
                    <?php echo $r['title'] ?>
                </h2>
                <p><span class="badge badge-success"><?php echo $r['company'] ?></span>
                    <p>
                        <?php echo $r['description'] ?>
                    </p>
                    <p><span class="badge badge-pill badge-warning"><?php echo $r['salary'] ?></span>
                        &nbsp; <span class="badge badge-pill badge-warning"><?php echo $r['location'] ?></span>
                        &nbsp; <span class="badge badge-pill badge-warning"><?php echo $r['cname'];?></span>
                    </p>
                    <p><a class="btn btn-danger" href="https://www.instahyre.com" role="button">Apply &raquo;</a></p>
                    <p class="text-muted"><?php echo date('j F, Y', strtotime($r['date']));?>
                    </p>
                    <hr>
            </div> <!-- /container --> <?php } ?>
        </div>
    </div>

    <?php include('includes/footer.php');
