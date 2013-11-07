<?php
ini_set('display_errors',1);
require("../../src/isdk.php");

$app = new iSDK();

$app->getAccessToken();

$returnFields = array('Id', 'FirstName', 'LastName','Email');

$query = array('Id' => '%');

$results = $app->dsQuery("Contact", 1000, 0, $query, $returnFields);

echo '<pre>';
print_r($results);
echo '</pre>';