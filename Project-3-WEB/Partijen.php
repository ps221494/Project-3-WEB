<!DOCTYPE html>
<html lang="nl">

<?php 
include_once "./classes/verkiezingDB.php";
$db = new verkiezingDB();
?>

<head>
    <title>Informatie Verkiezingingen</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.cs" />
    <link rel="stylesheet" href="css/navigatie.cs" />

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
                        <a href="Verkiezingen.php"><button class="MenuBtns">Verkiezingen</button></a>
                    </div>
                    <div class="MenuBtnsDiv">
                        <a href="Stemwijzer.php"><button class="MenuBtns">Stemwijzer</button></a>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <br>
    <div>
        <center>
            <h1>Partijen</h1>
        </center>
    </div>
    <br>
    <center>
        <div>
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "verkiezingenprj3";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM partij";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<a href=ContactGegevens.php> <button id=PartijBlock>". " " . $row["PartijName"]. "</button> </a>". "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
        </div>
    </center>
</body>
</html>