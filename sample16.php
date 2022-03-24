<?php
$news = file_get_contents('date/new.txt');
echo $news;

$news = $news . "<br>追加のニュースです";
$success = file_put_contents('date/new.txt',$news);

// readfile('date/new.txt');
?> 