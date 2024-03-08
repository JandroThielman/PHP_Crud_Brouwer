<?php
    // functie: formulier en database insert brouwer
    // auteur: Jandro

    echo "<h1>Insert brouwer</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertbrouwer($_POST) == true){
            echo "<script>alert('brouwer is toegevoegd')</script>";
        } else {
            echo '<script>alert("brouwer is NIET toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <label for="type">Naam:</label>
        <input type="text" id="type" name="naam" required><br>

        <label for="prijs">Land:</label>
        <input type="text" id="prijs" name="land" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='Brouwer.php'>Home</a>
    </body>
</html>
