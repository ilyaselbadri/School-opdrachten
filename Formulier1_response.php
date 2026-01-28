<?php include('header.php'); ?>

<div class="container mt-5">
    <h2 class="mb-4">Formulier1_Response</h2>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $voornaam = htmlspecialchars(trim($_POST["voornaam"] ?? ''));
        $leeftijd = htmlspecialchars(trim($_POST["leeftijd"] ?? ''));
        $woonplaats = htmlspecialchars(trim($_POST["woonplaats"] ?? ''));
        $opleiding = htmlspecialchars(trim($_POST["opleiding"] ?? ''));

        if (!empty($voornaam) && !empty($leeftijd) && !empty($woonplaats) && !empty($opleiding)) {
            echo "<table class='table table-bordered'>";
            echo "<tr><th>Voornaam</th><td>$voornaam</td></tr>";
            echo "<tr><th>Leeftijd</th><td>$leeftijd</td></tr>";
            echo "<tr><th>Woonplaats</th><td>$woonplaats</td></tr>";
            echo "<tr><th>Opleiding</th><td>$opleiding</td></tr>";
            echo "</table>";
        } else {
            echo "<div class='alert alert-danger'>Alle velden zijn verplicht!</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Er zijn geen gegevens ontvangen.</div>";
    }
    ?>

    <a href="Formulier1.php" class="btn btn-secondary mt-3">Terug naar formulier</a>
</div>

<?php include('footer.php'); ?>


