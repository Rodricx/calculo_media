<link rel="stylesheet" href="assets/css/style.css">
<?php

use controller\ExecuteSum;

require "autoload.php";


$sum = new ExecuteSum();
echo $sum->resultSum("teste.txt");

echo "<div class='resultado'>";
echo "<b>A sequência é:</b>" . "<br>";
echo "<span>$sum->sequence</span>" . "<br>";
echo "<b>A soma de todos os elementos do array é:</b>" . "<br>";
echo "<span>$sum->result</span>";
echo "</div>";


?>