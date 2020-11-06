<form method="post">
    <input type="number" name="sum" placeholder="number">
    <input type="submit" value="Tong la">
</form>
<?php
$sum =0;
$i = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["sum"];
}
while ($sum + $i < $name){
    $sum+=$i;
    $i++;
}
echo "<h2>".$sum."</h2>";





