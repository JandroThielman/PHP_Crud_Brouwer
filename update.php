<?php
    // functie: update brouwer
    // auteur: Jandro

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updatebrouwer($_POST) == true){
            echo "<script>alert('brouwer is gewijzigd')</script>";
        } else {
            echo '<script>alert("brouwer is NIET gewijzigd")</script>';
        }
        
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['brouwcode'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $id = $_GET['brouwcode'];
        $row = getbrouwer($id);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig brouwer</title>
</head>
<body>
  <h2>Wijzig brouwer</h2>
  <form method="post">
    
    <input type="hidden" id="merk" name="brouwcode" required value="<?php echo $row['brouwcode']; ?>"><br>

    <label for="type">Naam:</label>
    <input type="text" id="type" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <label for="prijs">Land:</label>
    <input type="text" id="prijs" name="land" required value="<?php echo $row['land']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='Brouwer.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen id opgegeven<br>";
    }
?>