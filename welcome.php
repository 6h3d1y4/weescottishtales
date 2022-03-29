<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php include "header.php"; ?> 


<!-- Welcome message -->
    </nav>
    <h3 class="my-5">Hi <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, Fit Like? Welcome to Wee Scottish Tales! <p>You can now read all the stories!</p></h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="clearfix">
                        <a style="margin:5px;" href="storywrite.php" class="btn btn-success"><i class="fa fa-plus"></i> Write a Story</a>
                    </div>
    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM story";
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
                                        <a href='viewstoryall.php?story_title=". $row['story_title'] ."' class='btn btn-primary'>Read the full story</a>
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