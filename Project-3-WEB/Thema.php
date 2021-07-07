<!DOCTYPE html>
<html lang="nl">

<?php 
include_once "./classes/verkiezingDB.php";
$db = new verkiezingDB();
?>

<head>
    <title>Informatie Verkiezingingen</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.cs"/>
    <link rel="stylesheet" href="css/navigatie.cs"/>

</head>

<body>
    <div>
        <div class="ContentMenu">
            <header class="HeaderMenu">
                <div class="HeaderMenuDiv">
                    <div class="MenuBtnsDiv">
                        <a href="index.php"><button class="MenuBtns">Home</button></a>
                    </div>
                    <div class="MenuBtnsDiv">
                        <a href="Partijen.php"><button class="MenuBtns">Partijen</button></a>
                    </div>
                    <div class="MenuBtnsDiv">
                        <a href="Thema.php"><button class="MenuBtns">Thema's</button></a>
                    </div>
                    <div class="MenuBtnsDiv">
                        <a href="Stemwijzer.php"><button class="MenuBtns">Stemwijzer</button></a>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <br>
    <center>
        <div>
            <h1>Thema's</h1>
        </div>
    <center>
        <br>

        <div>
            <?php
$rows = $db->SelectThemas();

foreach ($rows as $row)
 {
    echo "<form method='post' action='Standpunten.php'> <input type='submit' id='Themas' value='$row[Thema]' />
    <input type='hidden' value='$row[ThemaId]' name='thema_id' />
    </form><br>";
  }
?>
        </div>
    </center>
</body>
</html>