<?php include 'header.php'; ?>

<div class="container mt-4 p-4" style="background-color: #f5f5f5; border-radius: 3px;">
    <h3>Tafel van 
        <?php 
        $getal = isset($_GET['getal']) && is_numeric($_GET['getal']) ? intval($_GET['getal']) : 6;
        echo $getal; 
        ?>
    </h3>
    <ul class="list-group mb-3">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $resultaat = $i * $getal;
            echo "<li class='list-group-item'>{$i} × {$getal} = {$resultaat}</li>";
        }
        ?>
    </ul>

    <form method="get" action="" class="form-inline">
        <label for="getal" class="me-2">Voer een getal in:</label>
        <input type="number" name="getal" id="getal" class="form-control me-2" required>
        <button type="submit" class="btn btn-primary">Genereer Tafel</button>
    </form>
</div>

<?php include 'footer.php'; ?>
