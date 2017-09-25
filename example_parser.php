<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$e = $_POST['e'];
	$m = nl2br($_POST['m']);
	$to = "manager@catering66.pl";	
	$from = $e;
	$subject = 'Wiadomość od'.$e.;
	$message = 'Imię i nazwisko:'.$n.'Email:'.$e.'
    '.$m.'';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "Wiadomość została wysłana. Skontaktujemy sie w najbliższym czasie";
	} else {
		echo "Wiadomości nie udało się wysłać. Prosze spróbuj pożniej lub skontaktuj sie bezposrednio";
	}
}
?>