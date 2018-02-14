<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarmanW</title>
    <link rel="icon" href="/img/favicon.jpg">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-wrapper">
        <h1>INTRODUCTION</h1>
        <hr width="80%" />
        <p>
            Hello there, I am StarmanW. I am an editor on FANDOM and I have been editing since 30 April 2015. My interest is to learn how the technical stuff works and helping out FANDOM with cleaning up of any vandalism and spams. In addition, I also help out Wikipedia with cleaning up of vandalism during my spare time.
            <br />
            <br /> I personally love to do programming and to learn new programming language or technical skills during my spare time. All of my projects can be found at <a id="github-link" href="https://github.com/StarmanW" target="_blank">Github</a>. If you have any inquiries, feel free to contact me at swkf3011@hotmail.com.
        </p>
    </div>
<?php
	$line = date('Y-m-d H:i:s') . " - " . $_SERVER[REMOTE_ADDR];
	file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
?>
</body>
</html>

