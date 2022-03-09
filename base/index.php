<?php
	//avviare una sessione
	session_start();
	if(isset($_POST['input'])){
		$_SESSION['s'] = $_POST['input'];
	}
	
?>
<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<form action="pagina2.php" method="post">
			<div class="container">
			<label for="input"><b>Scrivi il testo</b></label>
			<input type="text" name="input" required>

			<button type="submit">Salva in sessione</button>
		</form>
		<?php
			if(isset($_SESSION['s'])){
				echo "<p>".$_SESSION['s'];
				echo "<a href='pagina2.php'>pagina2</a>";
			}
		?>
	</body>
</html>