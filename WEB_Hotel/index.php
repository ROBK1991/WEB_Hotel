<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="/web_hotel/res/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Startseite</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
    <?php
    include './inc/nav.php';
    ?> 
    <header>
        <div class="main">
            <div class="frontfontheader">
                <h1>WILLKOMMEN IM</h1>
            </div>
            
        <div class="flex">
            <img src="./res/img/Logo.png" alt="Web_Hotel" ><br>
        </div>
        <div class="paragraph">
            <p>Das Grant Hotel Wien ist zum einen lebende Legende der epochalen K&K-Monarchie
            und zum anderen eine luxuriöse Unterkunft für alle, die gewohnt sind
            die allerhöchsten Ansprüche zu stellen. Das Grand Hotel Wien befindet sich im
            Zentrum von Wien, am Kärntner Ring, in unmittelbarer Nähe der Wiener
            Staatsoper, der berühmten Kärntner Straße und des Stephansdoms.
            </p><br>
        
            <p>Hier kommen Beiträge in zwei nebeneinander gereihten Spalten</p><br>
        </div>
    </div>
    </header>
    <?php
    $menu = @$_GET['menu'];
            if (@$_SESSION['userID'] == '786' or @$_SESSION['userID'] == '793' or @$_SESSION['userID'] == '435') {
            } 
            ?>

             <?php
             if (isset($_COOKIE["username"]) and isset($_COOKIE["password"]) and isset($_COOKIE["logincookie"])) {
            $_SESSION['userID'] = $_COOKIE["userID"];
        }
        ?>
    </body>
    <?php
    include './inc/footer.php';
    ?> 
</html>