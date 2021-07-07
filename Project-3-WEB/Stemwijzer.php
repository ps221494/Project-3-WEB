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
    <center>
        <div>
            <h1>Stemwijzer</h1>
        </div>
    </center>
    <br>
    <center>
        <div>
            <?php
$rows = $db->SelectStemwijzer();

foreach ($rows as $row)
 {
    echo "<form method='post'> <input type='submit' id='PartijGegevens' value='$row[Standpunt]' />
    <input type='hidden' value='$row[StandpuntId]' name='standpunt_id' />
    &nbsp&nbsp
    <label for='Waarde'>Selecteer eens/ oneens: </label>
    <select name='Waarde' value='Waarde'> 
    <option name='Eens'>Eens</option>
    <option name='Oneens'>Oneens</option>
    </select> 
    &nbsp&nbsp
    <label for='Waarde'>Selecteer 1 t/m 5: </label>
    <select name='Waarde' value='Waarde'> 
    <option name='1' value='1'>1</option>
    <option name='2' value='2'>2</option>
    <option name='3' value='3'>3</option>
    <option name='4' value='4'>4</option>
    <option name='5' value='5'>5</option>
    </select>
    </form><br>";
  }
?>
        <button onclick="BerekenWaarde()">Bereken de score</button>
        </div>

<script type="text/Javascript">
          
        function BerekenWaarde()
        {  
            score = 0;
            var _Waarde = waarde;
            var _1 = 1;
            var _2 = 2;
            var _3 = 3;
            var _4 = 4;
            var _5 = 5;

            if (_Waarde == _1)
            {
                score + 1;
            }
            else
            {
                score - 1;
            }

            console.log(score);
        }
</script>
    </center>
    </body>
</html>