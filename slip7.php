<?php
$dom = new DomDocument();
$dom->load("slip7.xml");

echo "<h2>title of movies</h2>";
$movietitle = $dom->getElementsByTagName("movietitle")->item(0);
echo $movietitle->textContent;

echo "<h2>movie actor name</h2>";
$actorname = $dom->getElementsByTagName("actorname")->item(0);
echo $actorname->textContent;

echo "<h2>release year</h2>";
$releaseyear = $dom->getElementsByTagName("releaseyear")->item(0);
echo $releaseyear->textContent;
?>