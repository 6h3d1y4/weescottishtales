<?php
// Check existence of id parameter before processing further
if(isset($_GET["username"]) && !empty(trim($_GET["username"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM users WHERE username = ?";
    
    if($stmt = mysqli_prepare($connection, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        
        // Set parameters
        $param_username = trim($_GET["username"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $username = $row["username"];
                $first_name = $row["first_name"];
                $last_name = $row["last_name"];
                $email = $row["email"];
                $phone = $row["phone"];
                $is_admin = $row["is_admin"];
                $acc_start_date = $row["acc_start_date"];
                
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



</nav>
<div class="wrapper" style="width:600px; margin-left:475px; text-align:center;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3" style='color:white;' >Details of the user: <b style='color:white;'><?php echo $row["username"]; ?></b></h1>
                    <div class="form-group">
                        <label style="color:white;"></label>
                        <p></p>
                    </div>
                    <div class="form-group">
                        <label style="color:white;">First Name</label>
                        <p style="color:white;"><b><?php echo $row["first_name"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label style="color:white;">Last Name</label>
                        <p style="color:white;"><b><?php echo $row["last_name"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label style="color:white;">Email</label>
                        <p style="color:white;"><b><?php echo $row["email"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label style="color:white;">Phone Number</label>
                        <p style="color:white;"><b><?php echo $row["phone"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label style="color:white;">Admin</label>
                        <p style="color:white;"><b><?php echo $row["is_admin"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label style="color:white;">Account Started On</label>
                        <p style="color:white;"><b><?php echo $row["acc_start_date"]; ?></b></p>
                    </div>
                    <p><a style="margin:5px;" href="admin.php" class="btn btn-primary">Back</a>
                    <?php echo '<a style="color:white; text-decoration:none; margin:5px;" href="deleteuser.php?username='. $row['username'] .'" class="btn btn-primary"" title="Delete"><span>Delete</span></a>';?>
            </div>        
        </div>
    </div>
</body>
</html>