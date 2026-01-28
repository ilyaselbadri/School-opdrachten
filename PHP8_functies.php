<?php
session_start();

if (!isset($_SESSION['winkelmand'])) {
    $_SESSION['winkelmand'] = [];
}

function voegProductToe($naam, $prijs) {
    $product = ['naam' => $naam, 'prijs' => $prijs];
    array_push($_SESSION['winkelmand'], $product);
}


function verwijderLaatsteProduct() {
    array_pop($_SESSION['winkelmand']);
}

function toonWinkelmand() {
    if (empty($_SESSION['winkelmand'])) {
        echo "<tr><td colspan='2'>Winkelmand is leeg.</td></tr>";
    } else {
        foreach ($_SESSION['winkelmand'] as $product) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($product['naam']) . "</td>";
            echo "<td>&euro; " . number_format($product['prijs'], 2, ',', '.') . "</td>";
            echo "</tr>";
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['toevoegen'])) {
        $naam = $_POST['product_naam'];
        $prijs = floatval($_POST['product_prijs']);
        if (!empty($naam) && $prijs > 0) {
            voegProductToe($naam, $prijs);
        }
    }
    if (isset($_POST['verwijderen'])) {
        verwijderLaatsteProduct();
    }
}
?>

<?php include 'header.php'; ?>

<div class="container mt-4">
    <h2>Winkelmand</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product</th>
                <th>Prijs</th>
            </tr>
        </thead>
        <tbody>
            <?php toonWinkelmand(); ?>
        </tbody>
    </table>

    <form method="post" class="mb-3">
        <div class="row">
            <div class="col-md-5">
                <input type="text" name="product_naam" class="form-control" placeholder="Productnaam" required>
            </div>
            <div class="col-md-3">
                <input type="number" step="0.01" name="product_prijs" class="form-control" placeholder="Prijs (€)" required>
            </div>
            <div class="col-md-2">
                <button type="submit" name="toevoegen" class="btn btn-success w-100">Toevoegen</button>
            </div>
            <div class="col-md-2">
                <button type="submit" name="verwijderen" class="btn btn-danger w-100">Verwijder Laatste</button>
            </div>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>
