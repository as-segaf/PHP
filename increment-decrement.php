<?php 

echo "<h3>Postincrement</h3>";
$a = 5;
echo "\$a = $a <br>";
echo "nilai \$a awal " .$a++. "<br>";
echo "nilai \$a akhir $a";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "\$a = $a <br>";
echo "nilai \$a awal " .++$a. "<br>";
echo "nilai \$a akhir $a";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "\$a = $a <br>";
echo "nilai \$a awal " .$a--. "<br>";
echo "nilai \$a akhir $a";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "\$a = $a <br>";
echo "nilai \$a awal " .--$a. "<br>";
echo "nilai \$a akhir $a";
 ?>