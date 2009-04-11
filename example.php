<?PHP
	// Super simple HTML form dialing example

	require 'class.googlevoice.php';

	if(isset($_POST['btnCall']))
	{
		$gv = new GoogleVoice('google username', 'google password');
		$gv->call($_POST['your_number'], $_POST['their_number']);
		echo "Call placed";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>example</title>
</head>

<body>
	<form action="" method="post">
		<p><label for="your_number">Your Number:</label> <input type="text" name="your_number" value="" id="your_number"></p>
		<p><label for="their_number">Their Number:</label> <input type="text" name="their_number" value="" id="their_number"></p>
		<p><input type="submit" name="btnCall" value="Call" id="btnCall"></p>
	</form>
</body>
</html>
