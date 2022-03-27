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


      <!-- Bootstrap Popper and Javascript Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>
</html>