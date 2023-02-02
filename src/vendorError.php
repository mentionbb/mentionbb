<?php

$message = "Vendor file is not found. Please run the \"composer update\" (without quotes) command on root directory.";
$composerLink = "https://getcomposer.org/";

?>
<!DOCTYPE html>
<html dir="ltr">
<head>
    <title>Mention Error 1</title>

    <meta name="robots" content="noimageindex, nofollow, nosnippet">
</head>
<body>
    <div class="message">
        <span><?php echo $message; ?></span>
        <div>
            <a href="<?php echo $composerLink; ?>"><?php echo $composerLink ?></a>
        </div>
    </div>
</body>
</html>