<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <title>Review Book Better/List of Books</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
        background-image: url("image.jpg");
        }

        .danbrown {
                    background-color: black;
                    color: white;
                    margin: 20px;
                    padding: 20px;
                    text-align: center;
                   }
        #button{
            position: absolute;
            bottom: 200px;
        }
        .column-stack {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 30px
}

.column-stack ul {
  -ms-flex: none;
  flex: none;
  width: calc(33.333% - 10px);
}

.column-stack ul .column-header {
  font-size: 12px;
  text-transform: uppercase;
  color: black;
  font-weight: 500;
  padding-bottom: 5px;
  border-bottom: 1px solid #3a3a3a;
  display: flex;
  align-items: stretch;
  /* Default */
  justify-content: space-between;
}
    </style>
</head>
<body>
    
    <h1 style="color:black;text-align:center;">Review Book Better</h1>


    <h2 align="center"><b>List of books:</b></h2>

    <div class="column-stack">
  <ul>
    <li class="column-header"><b>Dan Brown</b></li>
    <li><b><a href="http://localhost/Project/review.php">Angels and Demons</a></b></li>
    <li><b><a href="http://localhost/Project/review.php">The Da Vinci Code</a></b></li>
    <li><b><a href="http://localhost/Project/review.php">The Lost Symbol</a></b></li>
    <li><b><a href="http://localhost/Project/review.php">Inferno</a></b></li>
    <li><b><a href="http://localhost/Project/review.php">Origin</a></b></li>
  </ul>
  <ul>
    <li class="column-header"><b>Fyodor Dostoevsky</b></li>
    <li><b><a href="http://localhost/Project/review.php">Crime and The Punishment</a></b></li>
    <li><b><a href="http://localhost/Project/review.php">The Gambler</a></b></li>
  </ul>
  <ul>
    <li class="column-header"><b>Sir Arthur Conan Doyle</b></li>
    <li><b><a href="http://localhost/Project/review.php">Hound of the Baskervilles</a></b></li>
    <li><b><a href="http://localhost/Project/review.php">The Sign of the Four</a></b></li>
    <li><b><a href="http://localhost/Project/review.php">The Valley of Fear</a></b></li>
    <li><b><a href="http://localhost/Project/review.php">The Five Orange Pips</a></b></li>
  </ul>
</div>


<p align="center">
        <a id="button" href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    
</body>
</html>