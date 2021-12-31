<?php
session_start();
if (isset($_COOKIE["logincookie"])) {
    $login_session_duration = $_COOKIE["logincookie"];
} else {
    $login_session_duration = 3600; // 1 hour
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="/web_hotel/res/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Navbar</title>
    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #150050;">
            <div class="container-fluid">
            <a href="/web_hotel/index.php"><img src="/web_hotel/res/img/Icon_WHV.png" alt="Web_Hotel" width="30" height="30"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item"><a href="/web_hotel/sites/hotel.php">Das Hotel</a></li>
                <li class="nav-item"><a href="/web_hotel/sites/register.php">Registrieren</a></li>
                <?php if (@$_SESSION['userID'] == '786' or @$_SESSION['userID'] == '793' or @$_SESSION['userID'] == '435') { ?>
                  <li class="nav-item"><a href="/web_hotel/sites/dashboard.php">Dashboard</a></li>
                  <li class="nav-item"><a href="/web_hotel/sites/profile.php">Profilverwaltung</a></li>
                  <li class="nav-item"><a href="/web_hotel/sites/logout.php">Logout</a></li>
                <?php } else { ?>                
                  <li class="nav-item"><a href="/web_hotel/sites/login.php">Login</a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </nav>
        </body>
</html>