<?
/*
Copyright (C) 2009 A.J. Cates <aj@ajcates.com>
See license.txt for more info on what you can and can't do with my code.
*/
if(isset($_POST['code'])) {
	//aww fuck we got code
	$oCode = $_POST['code'];
    $dCode = htmlspecialchars(preg_replace_callback(
        '/base64_decode\(\s*([\"|\'])([^\"\']*)[\"|\']\s*\)/',
        //'/base64_decode/',
        function($matches) {
        	//return "\n\n" . print_r($matches, true);
        	return '\'' . addslashes(base64_decode($matches[2])) . '\'';
        },
        stripslashes($oCode)
    ));
    $oCode = htmlspecialchars(stripslashes($oCode));
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="UTF-8" />
	<title>baseSix4 php decodr</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<link rel="stylesheet" href="hipster.css" type="text/css" />
</head>
<body>
	<!--[if IE]>
		<h1>Fuck you.</h1>
	<![endif]-->
	<h1>baseSix4 php decodr</h1>
	<h4>Reliving you of <code>base64_decode("R2FyYmFnZQ==")</code> shit since 1864.</h4>
	<form method="post">
		<? if(isset($dCode)): ?>
			<label for="dCode">Kick ass &amp; some what clean php code:</label>
			<textarea name="dCode" rows="20"><?=$dCode?></textarea>	
		<? endif;?>
		<label for="oCode">Shitty base64 infected php code:</label>
		<textarea id="oCode" name="code" rows="20"><?= isset($oCode) ? $oCode : null?></textarea>
		<input type="submit" value="America Fuck Yea!" />
	</form>
	<p>This is a little base64 decoder tool I wrote to help kick some ass on obfuscated php code. Turns <code>base64_decode("S2ljayBBc3M=")</code> in your php code into "Kick Ass".</p>
	<p>The source is available on <a href="https://github.com/ajcates/baseSix4-php-decodr">github</a>. Also you should read my fucking <a href="http://ajcates.tumblr.com">tumblr</a> cause it's totally kickass.</p>
</body>
</html>