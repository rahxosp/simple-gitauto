<?php

$SECRET_TOKEN = "SoJnCUyY"; // change this to random characters

if ($_GET['secret'] !== $SECRET_TOKEN) {
	die("Access denied: invalid secret token.");
}

$output = null;
$return_var = null;

exec("full/path/to/deploy.sh", $output, $return_var);

if ($return_var === 0) {
	echo "Deployment successful.<br>";
} else {
	echo "Deployment failed. Command output:<br>";
}

echo implode("<br>", $output);

?>
