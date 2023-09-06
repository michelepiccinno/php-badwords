<?php
var_dump($_POST['word']);
var_dump($_POST['paragr']);

echo 'questo è il testo originale: ' . $_POST['paragr'];
echo '<br><br> la lunghezza del paragrafo è ' . strlen($_POST['paragr']) . '<br><br>';

$paragr = $_POST['paragr'];
$filter =  $_POST['word'];

echo empty($filter)
  ? 'non hai inserito il testo da censurare'
  : 'questo è il testo modificato: ' . str_replace($filter, "***", $paragr);

?>