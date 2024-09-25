<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod";

echo "<p>$loremIpsum</p>";
echo "Panjang Karakter : ".strlen($loremIpsum) . "<br/>";
echo "Panjang Kata : ".str_word_count($loremIpsum) . "<br/>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>