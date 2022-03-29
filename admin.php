<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminlogin.php");
    exit;
}
?>
<?php include "header.php"; ?> 

<!-- Admin welcome message -->
</nav>
    <h4 style="color:white;">Hi <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>,<p>Here is the list of users and stories!</p></h4>
</div>

<!-- User List -->
    <style>
        .wrapper{
            width: 90%;
            margin: 0 auto;
        }
        /* .wrapper{display:flex; justify-content:center; font-family: 'Short Stack', cursive} */
    </style>

</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="clearfix">
                        <h2 style="color:white;">User List</h2>
                        <a style="margin:5px;" href="addusers.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add a new user</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM users";
                    if($result = mysqli_query($connection, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-dark table-sm table-bordered table-striped align-middle">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th style='color:white;'>First Name</th>";
                                        echo "<th style='color:white;'>Last Name</th>";
                                        echo "<th style='color:white;'>User Name</th>";
                                        echo "<th style='color:white;'>Email</th>";
                                        echo "<th style='color:white;'>User Added On</th>";
                                        echo "<th style='color:white;'>Admin</th>";
                                        echo "<th style='color:white;'></th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td style='color:white;'>" . $row['first_name'] . "</td>";
                                        echo "<td style='color:white;'>" . $row['last_name'] . "</td>";
                                        echo "<td style='color:white;'>" . $row['username'] . "</td>";
                                        echo "<td style='color:white;'>" . $row['email'] . "</td>";
                                        echo "<td style='color:white;'>" . $row['acc_start_date'] . "</td>";
                                        echo "<td style='color:white;'>" . $row['is_admin'] . "</td>";
                                        echo "<td style='color:white;'>";
                                        echo '<a style="color:white; text-decoration:none; margin:5px;" href="viewuser.php?username='. $row['username'] .'" class="btn btn-primary"" title="View"><span>View</span></a>';
                                        // echo '<a style="color:white; text-decoration:none; margin:5px;" href="deleteuser.php?username='. $row['username'] .'" class="btn btn-primary"" title="Delete"><span>Delete</span></a>';
                                        echo '<a style="color:white; text-decoration:none; margin:5px;" href="resetuser.php?username='. $row['username'] .'" class="btn btn-primary"" title="Reset"><span>Reset Password</span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    ?>
                </div>
            </div>        
        </div>
    </div>

    <!-- Story List -->
<style>
           .wrapper{
            width: 90%;
            margin: 0 auto;
        }
        /* .wrapper{display:flex; justify-content:center; font-family: 'Short Stack', cursive} */
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="clearfix">
                        <h2 style="color:white;">Story List</h2>
                        <!-- <a href="addstories.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add a new story</a> -->
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM story";
                    if($result = mysqli_query($connection, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-dark table-sm table-bordered table-striped align-middle">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th style='color:white;'>Story Title</th>";
                                        echo "<th style='color:white;'>Story Added By</th>";
                                        echo "<th style='color:white;'>Story Posted On</th>";
                                        echo "<th style='color:white;'></th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td style='color:white;'>" . $row['story_title'] . "</td>";
                                        echo "<td style='color:white;'>" . $row['username'] . "</td>";
                                        echo "<td style='color:white;'>" . $row['story_post_date'] . "</td>";
                                        echo "<td style='color:white;'>";
                                        echo '<a style="color:white; text-decoration:none; margin:5px;" href="viewstory.php?story_title='. $row['story_title'] .'" class="btn btn-primary" title="View"><span>View</span></a>';
                                        echo '<a style="color:white; text-decoration:none; margin:5px;" href="deletestory.php?story_title='. $row['story_title'] .'" class="btn btn-primary" title="Delete"><span>  Delete</span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($connection);
                    ?>
                </div>
            </div>        
        </div>
    </div>

    <?php include "footer.php"; ?> 