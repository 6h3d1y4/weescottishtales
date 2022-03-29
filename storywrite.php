<?php
// Include config file
require_once "config.php";
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: userlogin.php");
    exit;
}
// Define variables and initialize with empty values
$story_title = $story_location = $username  = $story_type = $story_text = "";
$story_title_err = $story_location_err = $username_err  = $story_type_err = $story_text_err = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate story_title. if there is a story title already available in the table, the website shows an error
    if(empty(trim($_POST["story_title"]))){
        $story_title_err = "Please enter a story_title.";
    } elseif(!preg_match('/^([A-Za-z0-9\s\_\-]+)$/', trim($_POST["story_title"]))){
        $story_title_err = "story title can only contain letters, numbers, spaces and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM story WHERE story_title = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_story_title);
            
            // Set parameters
            $param_story_title = trim($_POST["story_title"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $story_title_err = "This story title is already available.";
                } else{
                    $story_title = trim($_POST["story_title"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Validate story location
    if(empty(trim($_POST["story_location"]))){
        $story_location_err = "Please enter your first name.";
    } elseif(!preg_match('/^[a-zA-Z_]+$/', trim($_POST["story_location"]))){
        $story_location_err = "Location can only contain letters, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM story WHERE story_location = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_story_location);
            
            // Set parameters
            $param_firstname = trim($_POST["story_location"]);
            
           // Attempt to execute the prepared statement
           if(mysqli_stmt_execute($stmt)){
            /* store result */
            mysqli_stmt_store_result($stmt);
            $story_location = trim($_POST["story_location"]);
            }
                // Close statement
        mysqli_stmt_close($stmt);
    }
}

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 0){
                    $username_err = "Please signup before posting a story";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate story type
    if(empty(trim($_POST["story_type"]))){
        $story_type_err = "Please enter your story type.";
    } elseif(!preg_match('^(?:castle\b|museum\b)^', trim($_POST["story_type"]))){
        $story_type_err = "Location can only be castle or museum.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM story WHERE story_type = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_story_type);
            
            // Set parameters
            $param_firstname = trim($_POST["story_type"]);
            
           // Attempt to execute the prepared statement
           if(mysqli_stmt_execute($stmt)){
            /* store result */
            mysqli_stmt_store_result($stmt);
            $story_type = trim($_POST["story_type"]);
            }
                // Close statement
        mysqli_stmt_close($stmt);
    }
}

     // Validate story text
     if(empty(trim($_POST["story_text"]))){
        $story_text_err = "Please enter your story.";
        } else{
        // Prepare a select statement
        $sql = "SELECT id FROM story WHERE story_text = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_story_text);
            
            // Set parameters
            $param_firstname = trim($_POST["story_text"]);
            
           // Attempt to execute the prepared statement
           if(mysqli_stmt_execute($stmt)){
            /* store result */
            mysqli_stmt_store_result($stmt);
            $story_text = trim($_POST["story_text"]);
            }
                // Close statement
        mysqli_stmt_close($stmt);
    }
}

    // Check input errors before inserting in database
    if(empty($story_title_err) && empty($story_location_err) && empty($username_err) && empty($story_type_err) && empty($story_text_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO story (story_title, story_location, username, story_type, story_text) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_story_title, $param_story_location, $param_username, $param_story_type, $param_story_text);
            
            // Set parameters
            $param_story_title = $story_title;
            $param_story_location = $story_location;
            $param_username = $username;
            $param_story_type = $story_type;
            $param_story_text = $story_text;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to storywrite page
                echo "<h3 style='color:white;'>story saved successfully<h3>";
                echo "<meta http-equiv='refresh' content='2;URL=storywrite.php'/>";
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($connection);
}
?>

<?php include "header.php"; ?> 

    <h3>Add a New Story</h3>
        <div class="wrapper" style="width:300px; margin-left:650px;">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
                <label style="color:white;" >Story Title</label>
                <input type="text" name="story_title" class="form-control <?php echo (!empty($story_title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $story_title; ?>">
                <span class="invalid-feedback"><?php echo $story_title_err; ?></span>
            </div>   
            <div class="form-group">
                <label style="color:white;" >Story Location</label>
                <input type="text" name="story_location" class="form-control <?php echo (!empty($story_location_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $story_location; ?>">
                <span class="invalid-feedback"><?php echo $story_location_err; ?></span>
            </div>  
            <div class="form-group">
                <label style="color:white;" >Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label style="color:white;" >Story Type</label>
                <input type="text" name="story_type" class="form-control <?php echo (!empty($story_type_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $story_type; ?>">
                <span class="invalid-feedback"><?php echo $story_type_err; ?></span>
            </div> 
            <div class="form-group">
                <label style="color:white;" >Story Text</label>
                <textarea id="story_text" name="story_text" rows="10" cols="75" <?php echo (!empty($story_text_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $story_text; ?>"></textarea>
                <span class="invalid-feedback"><?php echo $story_text_err; ?></span>
            </div>  
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-primary" value="Reset">
                <a style="margin:5px;" href="welcome.php" class="btn btn-primary">Back</a>
            </div>
            </form>
    </div>    
    <?php include "footer.php"; ?> 