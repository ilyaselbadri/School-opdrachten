<?php include 'header.php'; ?>

<div class="container mt-5">




<div class="container mt-5">
    <h2 class="mb-4">Formulier-1</h2>
    <form action="Formulier1_Response.php" method="POST" class="mb-5">
        <div class="mb-3">
            <label for="voornaam" class="form-label">Voornaam:</label>
            <input type="text" class="form-control" id="voornaam" name="voornaam" required>
        </div>
        <div class="mb-3">
            <label for="leeftijd" class="form-label">Leeftijd:</label>
            <input type="number" class="form-control" id="leeftijd" name="leeftijd" required>
        </div>
        <div class="mb-3">
            <label for="woonplaats" class="form-label">Woonplaats:</label>
            <input type="text" class="form-control" id="woonplaats" name="woonplaats" required>
        </div>
        <div class="mb-3">
            <label for="opleiding" class="form-label">Opleiding:</label>
            <input type="text" class="form-control" id="opleiding" name="opleiding" required>
        </div>
        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
</div>

<?php include('footer.php'); ?>






