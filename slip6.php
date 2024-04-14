<?php
$xml=simplexml_load_file('slip6.xml');
$data=$xml->book;
foreach($data as $showdata){
    foreach($showdata-> bookno as $bookno){
        foreach($showdata-> bookname as $bookname){
            foreach($showdata -> authorname as $authorname){
                foreach($showdata ->price as $price){
                    foreach($showdata -> year as $year){
                        echo"$bookno <br>";
                        echo"$bookname <br>";
                        echo"$authorname <br>";
                        echo"$price <br>";
                        echo"$year <br>";
                    }
                }
            }
        }
    }
}
?>