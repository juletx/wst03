
<?php
    $eposta = trim($_POST["eposta"]);
    if (empty($eposta) {
        echo "<script>alert('Epostarik ez dago'); history.go(-1);</script>";
    }
        include '../php/DbConfig.php';
        $esteka = mysqli_connect($zerbitzaria, $erabiltzailea, $gakoa, $db) or die("Errorea datu-baseko konexioan");
        
        $sql = "DELETE FROM table_name WHERE eposta='$eposta'";
        $emaitza = mysqli_query($esteka, $sql);

        if (!$emaitza) {
            echo "<script>alert('Errorea datu basearen kontsultan'); history.go(-1);</script>";
            die();
        }
        mysqli_free_result($emaitza);
        mysqli_close($esteka);       
    }
?>