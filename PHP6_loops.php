<?php include 'header.php'; ?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
  <div class="card">
    <h3>Opdracht 1</h3>
    <ul>
      <?php
      for ($i = 1; $i <= 10; $i++) {
          echo "<li>Getal: $i</li>";
      }
      ?>
    </ul>
  </div>

  <div class="card">
    <h3>Opdracht 2</h3>
    <ul>
      <?php
      for ($i = 1; $i <= 10; $i++) {
          echo "<li>5 × $i = " . (5 * $i) . "</li>";
      }
      ?>
    </ul>
  </div>

  <div class="card">
    <h3>Opdracht 3</h3>
    <ul>
      <?php
      $dagen = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"];
      foreach ($dagen as $dag) {
          echo "<li>$dag</li>";
      }
      ?>
    </ul>
  </div>
</div>

<ul class="dropdown-menu">
    <li><a class="dropdown-item" href="php6_tafels.php">php6_tafels</a></li>
                        
</ul>


<style>
.container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 30px;
    max-width: 1200px;
    margin: auto;
}

.card {
    background-color: white;
    border-radius: 6px;
    padding: 20px;
    flex: 1 1 300px;
    box-sizing: border-box;
}

.card h3 {
    margin-top: 0;
    color: #333;
    font-size: 20px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

.card ul {
    list-style-type: none;
    padding-left: 0;
}

.card li {
    margin: 6px 0;
    font-size: 16px;
}



</style>




<?php include 'footer.php'; ?>
