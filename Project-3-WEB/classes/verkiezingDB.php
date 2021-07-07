<?php
class verkiezingDB
    {
        const DSN = "mysql:host=localhost;dbname=verkiezingenprj3";
        const USER = "root";
        const PASSWD = "";
           
        function SelectPartij(){
            try{
                $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

                $statement = $pdo->prepare("SELECT * FROM Partij");

                $statement->execute();

                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $rows;
            }
            catch(PDOException $e) {
                return false;
            }
        }

        function SelectVerkiezing()
        {

        try 
            {
              $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

              $statement = $pdo->prepare("SELECT * FROM verkiezing");

              $statement->execute();

             $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
             return $rows;
            }
            catch(PDOException $e) {
                return false;
            }
        }

        function SelectStandpunt($id)
        {
            try
            {
                $pdo = new PDO(self::DSN, self::USER, self::PASSWD);
                $statement = $pdo->prepare("SELECT * FROM `standpunten` WHERE `ThemaId` = :id; ");
                $statement->bindvalue(":id", $id, PDO::PARAM_INT);
                $statement->execute();
                $rows = $statement->fetchall(PDO::FETCH_ASSOC);
                return $rows[0];
            }
            catch(PDOException $e) 
            {
                return false;
            }

        }

        function SelectThemas()
        {
            try 
            {
                $pdo = new PDO(self::DSN, self::USER, self::PASSWD);
                $statement = $pdo->prepare("SELECT * FROM thema;");
                $statement->execute();
                $rows = $statement->fetchall(PDO::FETCH_ASSOC);
                return $rows;
            }
            catch(PDOException $e) 
            {
            return false;
            }
        }
    }

    

?>