<?php
$url = "https://sfsdemoapp-hab3czcshsd3hgcn.scm.australiacentral-01.azurewebsites.net/wwwroot/test"; // Example API URL
$response = file_get_contents($url);
echo "<h2>Response from API:</h2>";
echo "<pre>$response</pre>";
?>
