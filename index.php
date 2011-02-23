<?
if(isset($_POST['code'])) {
	//aww fuck we got code
	$oCode = $_POST['code'];
	$dCode = $oCode;
	//print_r($oCode);
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Base six4 decodr</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<link rel="stylesheet" href="hipster.css" type="text/css" />
</head>
<body>
	<!--[if IE]>
		<h1>Fuck you.</h1>
	<![endif]-->
	<h1>Base six4 decodr</h1>
	<form method="post">
		<? if(isset($dCode)): ?>
			<label for="oCode">Kick ass some what clean php code:</label>
			<textarea name="code" rows="20" placeholder="c0dez"><?=$dCode?></textarea>	
		<? endif;?>
		<label for="oCode">Shitty base64 infected php code:</label>
		<textarea id="oCode" name="code" rows="20" placeholder="c0dez"></textarea>
		<input type="submit" value="America Fuck Yea!" />
	</form>
	<p>This is a little base64 decoder tool I wrote to help kick some ass on obfuscated php code.</p>
</body>
</html>