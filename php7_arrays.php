<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/style.css"> 

<div class="container">
    <h2>Meubels</h2>
    <table class="styled-table">
        <tr><th>Meubelstuk</th></tr>
        <?php
        $meubel = ['Tafel', 'Stoel', 'Kast', 'Bank'];
        foreach ($meubel as $item) {
            echo "<tr><td>$item</td></tr>";
        }
        ?>
    </table>

    <h2>Klasgenoten</h2>
    <table class="styled-table">
        <tr><th>Naam</th><th>Leeftijd</th></tr>
        <?php
        $klasgenoten = ["Ahmed" => 16, "Klaas" => 15, "Yassir" => 17];
        foreach ($klasgenoten as $naam => $leeftijd) {
            echo "<tr><td>$naam</td><td>$leeftijd jaar</td></tr>";
        }
        ?>
    </table>

    <h2>Auto's</h2>
    <table class="styled-table">
        <tr><th>Merk</th><th>Snelheid</th><th>Verbruik</th><th>Zuinig</th></tr>
        <?php
        $autos = [
            ["merk" => "Fiat", "snelheid" => "120", "verbruik" => "1 op 20"],
            ["merk" => "Audi A6", "snelheid" => "240", "verbruik" => "1 op 10"],
            ["merk" => "Porsche 911", "snelheid" => "290", "verbruik" => "1 op 8"]
        ];

        foreach ($autos as $auto) {
            echo "<tr>";
            echo "<td>{$auto['merk']}</td>";
            echo "<td>{$auto['snelheid']}</td>";
            echo "<td>{$auto['verbruik']} </td>";

            if ($auto['verbruik'] <= 5.5) {
                echo "<td style='color: zwart;'>Lekker zuinig</td>";
            } else {
                echo "<td style='color: red;'>Nee</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</div>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f8fc;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1000px;
    margin: 30px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 8px rgba(0,0,0,0.1);
    border-radius: 8px;
}

h2 {
    color: #333;
    margin-top: 40px;
}

.styled-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.styled-table th,
.styled-table td {
    border: 1px solid #ddd;
    padding: 10px 15px;
    text-align: left;
}

.styled-table th {
    background-color:rgb(0, 0, 0);
    color: white;
}

.styled-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

</style>

<?php include 'footer.php'; ?>
