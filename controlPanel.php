<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Pannello di controllo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h2>Pannello di controllo</h2>
<p>Pagina di gestione impostazioni.
<?php

		//leggo ip dal database
			include("connessione.php");
			
			$sql="SELECT ip_public,ip_local FROM ip_address ORDER BY ip_date DESC LIMIT 1;";
			$ris=mysql_query($sql) or die ("Query fallita.");
			$riga=mysql_fetch_array($ris);
			
			echo "<ul><li>";
			echo "<a href='http://".$riga["ip_public"].":1994' title='Clicca qui se utilizzi una rete geografica'>Remoto</a>";
			echo "</li><li>";
			echo "<a href='http://".$riga["ip_local"].":1994' title='Clicca qui se utilizzi una rete locale'>Locale</a>";
			echo "</li></ul>";
			mysql_close();
		


?>
</p>
	<fieldset>
		<legend>Parametri microclima</legend>
		<form method="post" action="<!--indirizzo IP pubblico o locale-->">
			<input type="text" name="t" value="" >
			<input type="submit" name="invia" value="Conferma">
		</form>
	</fieldset>
</body>
</html>