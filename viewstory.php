<?php
// Check existence of id parameter before processing further
if(isset($_GET["story_title"]) && !empty(trim($_GET["story_title"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM story WHERE story_title = ?";
    
    if($stmt = mysqli_prepare($connection, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_story_title);
        
        // Set parameters
        $param_story_title = trim($_GET["story_title"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $story_title = $row["story_title"];
                $username = $row["username"];
                $story_post_date = $row["story_post_date"];
                $story_text = $row["story_text"];
                $story_type = $row["story_type"];

              
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($connection);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
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
        <a style="color:white;" class="nav-link active" aria-current="page" href="#">Home</a>
        <a style="color:white;" class="nav-link" href="#">Castles</a>
        <a style="color:white;" class="nav-link" href="#">Museums</a>
        <a style="color:white;" class="nav-link" href="#">Nightlife</a>
        <a style="color:white;" class="nav-link" href="logout.php">Logout</a>
        <a style="color:white;" class="nav-link" href="reset.php">Reset Password</a>
      </div>
    </div>
  </div>
</nav>
<!-- Blog -->
    <div class="col-md-8 mx-auto">
      <h1 style="color:white; font-weight: 600; font-family: Poppins, sans-serif;"><?php echo $row["story_title"]; ?></h1>
      <div class="py-3 text-dark flex items-center justify-center">
      <small class="mr-3 flex flex-row items-center">
      <svg fill="currentColor" height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g style="color:white;">
		<path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
			c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
			c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"/>
	</g>
</g>
</svg>
      <span style="color:white; font-weight: 600; font-family: Poppins, sans-serif;" class="ml-1"><?php echo $row["story_post_date"]; ?></span></small>
      <small><a href="#" class="flex flex-row items-center text-dark mr-3">
      <svg class="text-indigo-600" fill="currentColor" height="16px" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" style="color:white;" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
      <span style="color:white; font-weight: 600; font-family: Poppins, sans-serif;" class="ml-1"><?php echo $row["username"]; ?></span></a></small>
      <small><a href="#" class="flex flex-row items-center text-dark"></small>
      <svg  class="text-indigo-600" fill="currentColor" height="16px" aria-hidden="true" role="img" focusable="false"></svg> 
       
        </div>
    </div>

<div class="col-md-8 mx-auto" style="height: 400px; background-size: cover; background-position: center;"><img src="<?php echo 'upload/images/'. $row['story_title'] .''. ".jpg" .'';?>" alt="image">
</div>

      <div class="col-lg-8 p-2 p-sm-4 mx-auto">
        <div class="text-secondary">
    <p style="color:white; font-weight: 200; font-family: Poppins, sans-serif; text-align: justify; word-spacing: 2px; text-decoration: none;"><?php echo $row["story_text"]; ?></p>
    <br>
    <br>
     </div>
     <p><a style="margin:5px;" href="admin.php" class="btn btn-primary">Back</a>
    </div>

</body>
</html>