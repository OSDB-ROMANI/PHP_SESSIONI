	<form action="" method="post">
		<label for="v1">Dati da salvare in sessione</label>
		<input type="text" id="v1" name="dati" /><br>
		<div>
			<input type="submit" name="crea" value="crea sessione"></br>
			<input type="submit" name="id" value="ID di sessione"></br>
			<input type="submit" name="salva" value="salva dati sessione"></br>
			<input type="submit" name="stampa" value="stampa dati sessione"></br>			<input type="submit" name="status" value="stato della sessione"></br>			
			<input type="submit" name="cancella" value="cancella valori"></br>
			<input type="submit" name="distruggi" value="distruggi sessione"></br>
			<input type="submit" name="elimina" value="elimina sessione"></br>
		</div>
	</form>	
<?php
	if(isset($_POST['crea'])){
		session_start();
	}elseif(isset($_POST['id'])){
		session_start();
		echo "ID di sessione ".session_id()."</br>";
		if(empty($_COOKIE["PHPSESSID"])) echo "non ci sono sessioni attive";
		else echo "Dati del cookie di sessione ".$_COOKIE["PHPSESSID"]."</br>";
	}elseif(isset($_POST['salva'])){
		session_start();
		$_SESSION['dati'] = $_POST['dati'];
	}elseif(isset($_POST['status'])){
		if(session_status() == PHP_SESSION_NONE){
			echo "sessione non attiva: ".session_status()."</br>";
			session_start();
			echo "sessione attivata ".session_status()."</br>";
		}
	}elseif(isset($_POST['cancella'])){
		session_start();
		session_unset();
	}elseif(isset($_POST['distruggi'])){
		session_start();
		session_destroy();	
	}elseif(isset($_POST['elimina'])){
		session_start();
		session_unset();
		session_destroy();
		unset($_COOKIE["PHPSESSID"]);
		setcookie("PHPSESSID",null,-1,"/");
	}
	if(session_status() == PHP_SESSION_NONE)
		session_start();
	if(isset($_SESSION['dati']))
		echo "VALORI DELLA SESSIONE ".$_SESSION['dati'];
	else
		echo "non ci sono dati salvati nella sessione !";	

?>