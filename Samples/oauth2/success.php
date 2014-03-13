<?php
require("../../src/isdk.php");

$app = new iSDK();

if(isset($_GET['code'])){
    $app->setClientId('CLIENTID');
    $app->setSecret('CLIENTSECRET');
    $app->authorize($_GET['code']);

    $returnFields = array('Id', 'FirstName', 'LastName', 'Email');

    $query = array('Id' => '%');

    $results = $app->dsQuery("Contact", 1000, 0, $query, $returnFields);

    $data = "<table border='1' style='text-align: center;'><tr>";

    foreach ($returnFields as $field) {
        $data .= "<td>$field</td>";
    }
    $data .= "</tr>";
    foreach ($results as $result => $value) {
        $data .= "<tr>";
        foreach ($returnFields as $field) {
            if (isset($value[$field])) {
                $data .= "<td>" . $value[$field] . "</td>";
            } else {
                $data .= "<td>No Data</td>";
            }
        }
        $data .= "</tr>";
    }
    $data .= "</table>";

    echo $data;
}