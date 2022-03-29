
<?php

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
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


<?php include "header.php"; ?> 
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
     <p><a style="margin:5px;" href="index.php" class="btn btn-primary">Back</a>
    </div>

    <?php include "footer.php"; ?> 