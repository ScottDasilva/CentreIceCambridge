<?php
/**
 * Author:  Scott Da Silva
 * ID:      000771150

 * 
 * This is solely my work.
 */
include "connect.php";

$value1 = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$value2 = filter_input(INPUT_POST, "postContent", FILTER_SANITIZE_STRING);

    // sql statement that gets parameters from the form and inserts the new information 
    // into the database.
    $command = "INSERT INTO reviews (`reviewID`, `username`, `review`, `timePosted`) VALUES (NULL, ?, ?, CURRENT_TIMESTAMP);";
    $stmt = $dbh->prepare($command);
    $result = $stmt->execute([$value1, $value2]);

    if ($result) {
        echo ( "Review has been successfully created.");
    }

?>

<html>
    <head>
        <meta charset="UTF-8" content="text/html">
        <title>Write a Review</title>
        <style type='text/css'>body{margin:0;padding:0;overflow:auto;font-family:'Segoe UI',Helvetica,Arial,Sans-Serif}</style>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=Al_1aYttvxu3Bd6CSqRveK3RP6AvEG--Ste5awC4mxi6vc7KlXbrb9J8t6qpRPBC'></script>
         <script type='text/javascript'></script>
         <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <script type="text/javascript" src="js/jquery-1.10.0.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
         <script src="js/js.js"></script>
        
    </head>

    <body>
        <div class="container-fluid">
            <!--NAV-->
            <div class="row">
                <nav class="navbar  navbar-expand-lg navbar-dark bg-dark col-lg-12">
                        <a class="navbar-brand" href="index.html">Centre Ice Cambridge</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reviews.html">Reviews</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="writeReview.php">Write a Review <span class="sr-only">(current)</span></a>
                            </li>
            
                            </ul>
                        </div>
                </nav>
            </div>
            <br>
            <br>
        <div class='row'>    
            <div class="col-lg-6 align-self-center" id="postArea">
            <form action="" method="POST">
                Username:
                <br>
                <input type="text" name="username" id="username"required>
                <br><br>

                <textarea class="form-control" id="postContent" rows="3" name="postContent" placeholder="Write review here..."></textarea>
                
                <input type="submit" name="submit" value="Post">
            </form>
            <a href="reviews.html">View Reviews</a>
        </div>
    </div>

        
    </body>
</html>