<?php
require_once('class_lingkaran.php');

echo "Nilai PHI =".Lingkaran::PHI."<br>";
$lingkaran1 = new Lingkaran (10);
$lingkaran2 = new Lingkaran (4);

echo "Luas Lingkaran 1:". $lingkaran1->getluas()."<br>";
echo "Luas Lingkaran 2:". $lingkaran2->getluas()."<br>";
echo "<hr>";
echo "keliling Lingkaran 1:". $lingkaran1->getkeliling()."<br>";
echo "keliling Lingkaran 2:". $lingkaran2->getkeliling()."<br>";
?>