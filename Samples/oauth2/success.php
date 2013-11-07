<?php
require("../../src/isdk.php");

$app = new iSDK();

if(isset($_GET['code'])){

    $app->getAccessToken();

    $returnFields = array('Id', 'FirstName', 'LastName','Email');

    $query = array('Id' => '%');

    $results = $app->dsQuery("Contact", 10, 0, $query, $returnFields);

    echo '<pre>';
    print_r($results);
    echo '</pre>';
}