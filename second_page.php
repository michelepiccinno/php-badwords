<?php
var_dump($_POST['word']);
var_dump($_POST['paragr']);

echo 'questo è il paragrafo: <br><br>' . $_POST['paragr'];
echo '<br><br> la lunghezza del paragrafo è ' . strlen($_POST['paragr']) . '<br><br>';

$paragr = $_POST['paragr']; 
$filter =  $_POST['word'];  

echo (str_replace($filter, "***", $paragr));
?>

