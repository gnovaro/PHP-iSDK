<?php

require("../../src/isdk.php");

$app = new iSDK();

echo "<p>Click the link below to allow my application to access your Infusionsoft application.</p>";
echo '<a href="'.$app->getAuthorizationURL().'">Authorize My Application</a>';