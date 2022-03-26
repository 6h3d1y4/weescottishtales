<?php
// Process delete operation after confirmation
if(isset($_POST["username"]) && !empty($_POST["username"])){
    // Include config file
    require_once "config.php";
    
 // Prepare a select statement
 $sql = "DELETE FROM users WHERE username = ?";
    
 if($stmt = mysqli_prepare($connection, $sql)){
     // Bind variables to the prepared statement as parameters
     mysqli_stmt_bind_param($stmt, "s", $param_username);
     
     // Set parameters
     $param_username = trim($_POST["username"]);
     
     // Attempt to execute the prepared statement
     if(mysqli_stmt_execute($stmt)){
        // Records deleted successfully. Redirect to landing page
        header("location: admin.php");
        exit();
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}
 
// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($connection);
} else{
// Check existence of username parameter
if(empty(trim($_GET["username"]))){
    // URL doesn't contain username parameter. Redirect to error page
    header("location: error.php");
    exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete User</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="username" value="<?php echo trim($_GET["username"]); ?>"/>
                            <p>Are you sure you want to delete this user?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="admin.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
