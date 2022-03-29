<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: userlogin.php");
    exit;
}
?>
<?php include "header.php"; ?> 
    
    <div class="wrapper" style="width:300px; margin-left:650px;">
    <form action="fileuploader.php" method="post" enctype="multipart/form-data">
        <h2 style="color:white; font-family: 'Short Stack', cursive;">File Uploader</h2>
        <label style="color:white; font-family: 'Short Stack', cursive;" for="fileSelect">Filename:</label>
        <input style="color:white; font-family: 'Short Stack', cursive;"type="file" name="photo" id="fileSelect">
        <input style="color:white; font-family: 'Short Stack', cursive; margin-top:5px;" class="btn btn-primary" type="submit" name="submit" value="Upload">
        <input style="color:white; font-family: 'Short Stack', cursive; margin-top:5px;" type="reset" class="btn btn-primary ml-2" value="Reset">
        <p style="color:white; font-family: 'Short Stack', cursive;"><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>
    <div>


    <?php include "footer.php"; ?> 