<?php

echo 'Hello from <a href="https://jrcan.dev.netlib.re/">JrCanDev</a> <br>';
echo '<img src="https://www.docker.com/sites/default/files/horizontal.png">';
echo '<p>update : 05 oct. 2021 </p>';
echo '<a href="http://phddb.jrcandev.netlib.re:9123/hooks/b3b981be">refresh</a>';

var_dump($_ENV['DB_HOST']);

$db = mysqli_connect($_ENV['DB_HOST'], 'test', '1234567abc', 'testdb');

var_dump($db);

?>

