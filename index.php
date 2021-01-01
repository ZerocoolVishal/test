<?php

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Git Deploy</title>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</head>
<body class="bg-light">
<div class="container">
    <div class="position-absolute position-absolute top-50 start-50 translate-middle" style="width: 600px;">
        <div class="card shadow-sm border-0 align-middle">
            <div class="card-body p-3">
                <div class="clearfix">
                    <div class="mb-4 fs-5 fw-bolder float-start">Git Deploy</div>
                    <a href="" class="btn btn-success float-end">
                        <ion-icon name="arrow-down-circle-sharp"></ion-icon>
                    </a>
                </div>
                <div class="bg-dark text-light fs-6 font-monospace p-3 mb-3">
                    <?php
                        $cmd = "git pull";
                        echo $cmd;
                        echo "<br>";
                        echo "<pre>";
                        $last_line = system($cmd, $retval);
                        echo "</pre>";
                    ?>
                </div>
                <?php if ($retval === 0): ?>
                    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                        <strong>Success!</strong> <br>
                        <?= $last_line ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php else: ?>
                    <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                        <strong>Failed!</strong> <br>
                        <?= $last_line ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="position-fixed bottom-0 text-center w-100 p-2">
    Git Deploy
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
