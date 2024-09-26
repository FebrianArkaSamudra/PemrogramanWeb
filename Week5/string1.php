<?php
$loremIpsum = "Lorem ipsum dolor sit amet";

echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter: ". strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";

?>