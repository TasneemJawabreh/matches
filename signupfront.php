<?php include_once("signup_player.php") ?>
<?php include_once("signup_trainer.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>signup</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



    <style media="screen">
    body {
        background: url('img/1.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .card {
        margin-top: -10px;
        width: 40%;
    }
    </style>
</head>



<body>
    <div class="container mt-5 pt-5">
        <div class="card mx-auto border-0">
            <div class="card-header border-bottom-0 bg-transparent">
                <ul class="nav nav-tabs justify-content-center pt-4" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-primary" id="player-tab" data-toggle="pill" href="#player"
                            role="tab" aria-controls="player" aria-selected="true">player</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-primary" id="trainer-tab" data-toggle="pill" href="#trainer" role="tab"
                            aria-controls="trainer" aria-selected="false">Trainer</a>
                    </li>
                </ul>
            </div>

            <div class="card-body pb-4">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="player" role="tabpanel" aria-labelledby="player-tab">
                        <form action="signupfront.php" method="post">
                            <div class="form-group">
                                <label for="player_name" class="text-info">player name:</label><br>
                                <input type="text" name="player_name" id="player_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="player_email" class="text-info">Email:</label><br>
                                <input type="email" name="player_email" id="player_email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="player_password" class="text-info">Password:</label><br>
                                <input type="password" name="player_password" id="player_password" class="form-control"
                                    required>
                            </div>

                            <?php

                            if ((isset($_SESSION['signup_error']))&&($_SESSION['signup_error']==0)){ ?>

                            <p class="text-danger">this account is already exist</p>
                            <?php 

} ?>


                            <div class="text-center pt-4">
                                <button type="submit" class="btn btn-primary">Regester</button>
                            </div>

                            <div class="text-center pt-3">
                                <a class="btn btn-link text-primary"
                                    href="http://localhost/training2/signin_front.php">Log in</a>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="trainer" role="tabpanel" aria-labelledby="trainer-tab">
                        <form action="signupfront.php" method="post">
                            <div class="form-group">
                                <label for="trainer_name" class="text-info">trainer name:</label><br>
                                <input type="text" name="trainer_name" id="trainer_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="trainer_email" class="text-info">Email:</label><br>
                                <input type="email" name="trainer_email" id="trainer_email" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="trainer_password" class="text-info">Password:</label><br>
                                <input type="password" name="trainer_password" id="trainer_password"
                                    class="form-control" required>
                            </div>
                            <?php

                             if ((isset($_SESSION['signup_error']))&&($_SESSION['signup_error']==0)){ ?>

                            <p class="text-danger">this account is already exist</p>
                            <?php 

} ?>


                            <div class="text-center pt-4">
                                <button type="submit" class="btn btn-primary">Regester</button>
                            </div>

                            <div class="text-center pt-3">
                                <a class="btn btn-link text-primary"
                                    href="http://localhost/training2/signin_front.php">Log in</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



</body>