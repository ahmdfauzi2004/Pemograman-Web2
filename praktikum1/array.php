<?php 
$fruits = ["Mango", "Banana", "Melon", "Orange"];

echo $fruits[1];
echo "<br>";
echo "Jumlah Buah = " . count($fruits);

echo "<ol>";
foreach ($fruits as $fruit) {
    echo "<li>Buah " . $fruit . "</li>"; 
}
echo "</ol>"; 

$fruits[] = "Avocado";
$fruits[2] = "Strawberry";

echo "<ol>";
foreach ($fruits as $i => $V) {
    echo "<li>buah index ke-" . $i . " > " . $V . "</li>";

}
echo "<ol>";




?>