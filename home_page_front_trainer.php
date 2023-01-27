<?php include_once("addmatch.php") ?>
<?php include_once("choosematch.php") ?>
<?php include_once("signup_player.php") ?>
<?php include_once("home_page_trainer.php") ?>
<!doctype html>
<html lang="en">
<style>
@import 'bootstrap/bootstrap';
@import 'bootstrap/variables';
@import 'bootstrap/mixins';

$font-primary: 'Poppins',
Arial,
sans-serif;
$primary: #6807f9;

body {
    font-family: $font-primary;
    font-size: 16px;
    line-height: 1.8;
    font-weight: normal;
    background: #f8f9fd;
    color: lighten($black, 50%);
}

a {
    transition: .3s all ease;
    color: $primary;

    &:hover,
    &:focus {
        text-decoration: none !important;
        outline: none !important;
        box-shadow: none;
    }
}

h1,
h2,
h3,
h4,
h5,
.h1,
.h2,
.h3,
.h4,
.h5 {
    line-height: 1.5;
    font-weight: 400;
    font-family: $font-primary;
    color: $black;
}

.bg-primary {
    background: $primary !important;
}

.ftco-section {
    padding: 7em 0;
}

.ftco-no-pt {
    padding-top: 0;
}

.ftco-no-pb {
    padding-bottom: 0;
}

//HEADING SECTION
.heading-section {
    font-size: 28px;
    color: $black;
}

//COVER BG
.img {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.table-wrap {
    @include media-breakpoint-down(xl) {
        overflow-x: scroll;
    }
}

.table {
    min-width: 1000px !important;
    width: 100%;
    background: $white;
    -webkit-box-shadow: 0px 5px 12px -12px rgba(0, 0, 0, 0.29);
    -moz-box-shadow: 0px 5px 12px -12px rgba(0, 0, 0, 0.29);
    box-shadow: 0px 5px 12px -12px rgba(0, 0, 0, 0.29);
    text-align: center;

    thead {
        &.thead-primary {
            background: $primary;
        }

        th {
            border: none;
            padding: 30px;
            font-size: 14px;
            color: $white;
        }
    }

    tbody {
        tr {
            margin-bottom: 10px;
        }

        th,
        td {
            border: none;
            padding: 30px;
            font-size: 14px;
            background: $white;
            vertical-align: middle;
            border-bottom: 2px solid #f8f9fd;
        }

        th.scope {
            background: darken(#f8f9fd, 4%);
            border-bottom: 2px solid darken(#f8f9fd, 6%);
        }

        td {
            @include media-breakpoint-up(md) {
                &:nth-child(odd) {
                    background: darken(#f8f9fd, 1%);
                    border-bottom: 2px solid darken(#f8f9fd, 3%);
                }
            }
        }
    }
}


//BUTTONS
.btn {
    cursor: pointer;
    border-width: 2px;
    border-radius: 2px;
    box-shadow: none !important;
    font-size: 13px;
    font-weight: 500;
    -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
    box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);

    &:hover,
    &:active,
    &:focus {
        outline: none !important;
        -webkit-box-shadow: 0px 12px 20px -6px rgba(0, 0, 0, 0.21);
        -moz-box-shadow: 0px 12px 20px -6px rgba(0, 0, 0, 0.21);
        box-shadow: 0px 12px 20px -6px rgba(0, 0, 0, 0.21);
    }

    &.btn-primary {
        background: $primary;
        border-color: $primary;
        color: $white;

        &:hover,
        &:focus {
            border-color: darken($primary, 10%) !important;
            background: darken($primary, 10%) !important;
        }

        &.btn-link {
            background: transparent;
            color: $white;
            border: none;
            box-shadow: none;
        }
    }

    &.btn-outline-primary {
        color: $white;
    }

    &.table-wrap {
        overflow-y: scroll;
        height: 20px;
    }

    .table-responsive {
        max-height: 100px;
    }
</style>

<head>
    <title>Table 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">trainer page</h2>
                </div>
            </div>
            <form action="home_page_front_trainer.php" method="post">
                <div class="row">
                    <label for="match_name" class="text-info">match name : </label>&nbsp;
                    <input type="text" name="match_name" id="match_name" class="col-xs-4" required>&nbsp;
                    <button type="submit" class="btn btn-primary">add match</button>
                </div>


            </form>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                add player
            </button>

            <!--  add player -popup form -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">add player</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">

                            <form action="home_page_front_trainer.php" method="post">
                                <div class="form-group">
                                    <label for="player_name" class="text-info">player name:</label><br>
                                    <input type="text" name="player_name" id="player_name" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="player_email" class="text-info">Email:</label><br>
                                    <input type="email" name="player_email" id="player_email" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="player_password" class="text-info">Password:</label><br>
                                    <input type="password" name="player_password" id="player_password"
                                        class="form-control" required>
                                </div>

                                <div class="text-center pt-4">
                                    <button type="submit" class="btn btn-primary">add</button>
                                </div>


                            </form>

                        </div>




                    </div>
                </div>
            </div>

            <!--  add player -popup form -->
            <div class="modal" id="myModal1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">choose matche</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->

                        <?php
error_reporting(E_ERROR | E_PARSE);

$servername="localhost";
$username="root";
$password="";
$dbname="training2";

	
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "can not connect to database";
        exit;
    } 


	$qr_str = "select * from matches";
		
			$result = $conn->query($qr_str);
			$check=0;
			for ($i = 0; $i < ($result->num_rows); $i++) {
		
				$row = $result->fetch_assoc();
		        $matchname=$row['match_name'];
                $match_id=$row['match_id'];
				echo"$matchname";

?> <div class="modal-body">
                            <form action="home_pag_trainer.php" method="post">

                                <button type="submit" name="choose" value="<?php echo $match_id ?>"
                                    class="btn btn-primary"><?php echo $matchname ?></button>



                            </form>

                        </div>
                        <?php 
                            }
                               ?>
                    </div>




                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center mb-4">players table</h4>
                <div class="table-wrap" id="down">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>delete</th>
                                <th>match</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                error_reporting(E_ERROR | E_PARSE);

$servername="localhost";
$username="root";
$password="";
$dbname="training2";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "can not connect to database";
        exit;
    } else 

    $qr_str = 'select * from players';
    $result = $conn->query($qr_str);
  
        $check=0;
     for ($i = 0; $i < ($result->num_rows); $i++) {
       
            $row = $result->fetch_assoc();
            $email=$row['email'];
            $name=$row['name'];
            $id=$row['id'];
            $matchid=$row['matcid'];

           
            ?>
                            <tr>
                                <form id="players" class="form" method="post">
                                    <th scope="row" class="scope"> <?php echo $id ?></th>
                                    <td> <?php echo $name ?></td>
                                    <td> <?php echo $email ?></td>

                                    <td><button type="submit" name="Delete" class="btn btn-danger"
                                            value="<?php echo $id ?>" id=<?php echo $id ?>>delete</button></td>

                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            name="choose_match" data-target="#myModal1" value="<?php echo $id ?>"
                                            id=<?php echo $id ?>>
                                            <?php 
                                            $_SESSION['player_id'] = $id;
                                                $qr_str2 = "select match_name from matches WHERE match_id='$matchid'";
                                               
                                                $result2 = $conn->query($qr_str2);
                                                $row2 = $result2->fetch_assoc();
                                                $match=$row2['match_name'];

                                               
                                                echo  $match ?>
                                        </button>
                                    </td>
                                </form>
                            </tr>

                            <?php    } ?>
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php
 

 //$id = $_GET['id'];
 //$query = "DELETE FROM players WHERE id = '$id';";
// $result = mysqli_query($conn, $query); 
?>

</body>

</html>