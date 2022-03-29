<?php
// Initialize the session
session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Additional CSS -->
    <link rel="stylesheet" href="page.css">
    <!-- Additional Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Kaushan+Script&family=Montserrat:wght@700&family=Short+Stack&display=swap" rel="stylesheet">
    <title>wee scottish tales</title>
</head>
<body>
<!-- Navbars -->
<div>
<nav class="navbar fixed-top navbar-dark navbar-expand-lg justify-content-end">
  <div class="container-fluid">
    <a style="color:white;" class="navbar-brand" href="index.php"><img src="logo.png" alt="" width="55" height="60" class="d-inline-block align-text-center">Wee Scottish Tales</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a style="color:white;" class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a style="color:white;" class="nav-link" href="castles.php">Castles</a>
        <a style="color:white;" class="nav-link" href="museums.php">Museums</a>
        <a style="color:white;" class="nav-link" href="uploadpage.php">Upload</a>
        <a style="color:white;" class="nav-link" href="userlogin.php">Login</a>
        <a style="color:white;" class="nav-link" href="signup.php">Signup</a>
      <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button style="color:white;font-size:x-large;" class="btn" type="submit">Search</button>
      </form>
      </div>
    </div>
  </div>
</nav>
</div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM story WHERE story_type='castle'";
                    if($result = mysqli_query($connection, $sql)){
                        if(mysqli_num_rows($result) > 0){
                          echo "<div class='container'>
                          <div class='row'>";
                                 while($row = mysqli_fetch_array($result)){
                                        echo "<div class='col-lg-3 col-md-4 col-sm6 col-xs-12 mt-4'>
                                        <div class='card text-center'>
                                        <img style='border-radius:5%;color:black;' src='upload/images/$row[story_title].jpg' class='card-img-top' alt='...'>
                                        <div class='card-body'>
                                        <h5 style='color:black;' class='card-title'>" . $row['story_title'] . "</h5>
                                        <p class='card-text'>Story By: " . $row['username'] . "</p>
                                        <td style='color:white;'>Story Posted on: " . $row['story_post_date'] . "</td>
                                        <p class='card-text'>" . substr($row['story_text'],0,100) . "</p>
                                        <a href='viewstory.php?story_title=". $row['story_title'] ."' class='btn btn-primary'>Read the full story</a>
                                        </div>
                                        </div>
                                        </div>";}
                                        echo"</div>
                                        </div>";
                                  }
                    // Close connection
                    mysqli_close($connection);
                                 } else{
                      // URL doesn't contain id parameter. Redirect to error page
                      header("location: error.php");
                      exit();
                  }
                    ?>

<?php include "footer.php"; ?> 