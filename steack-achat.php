<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"VOTRE NOM"<email-adamechalard@gmail.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';

		mail("email-adamechalard@gmail.com", "CONTACT - Monsite.com", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>Steack</h2>
		<form method="POST" action="">
			<input type="text" name="nom" placeholder="Pseudo" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />

			<input type="number" name="message" placeholder="Quantité"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
			<?php
			echo "$_POST * 2";
			?>
			<input type="submit" value="Envoyer !" name="mailform"/>
		</form>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
	</body>
</html>