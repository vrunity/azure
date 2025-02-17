<?php
$url = "https://api.ram.com/test"; // Example API URL
$response = file_get_contents($url);
echo "<h2>Response from API:</h2>";
echo "<pre>$response</pre>";
?>
