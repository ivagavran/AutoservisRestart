<?php
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	$ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $comment=$_POST['comment'];
    $model=$_POST['model'];
    $godina = $_POST['godina'];
    $km = $_POST['km'];

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	$mail->Port = "587";

	$mail->Username = "ivagavran314@gmail.com";
	$mail->Password = "nvctqvpbhligzout";

	$mail->Subject = "Autoservis Restart - Nova Poruka";
    $mail->SetFrom($email, $ime);
    $mail->AddReplyTo($email, $ime);
	$mail->isHTML(true);
	$mail->Body = "<b>Upit: </b>  ".$comment."<b>Ime i prezime: </b>"
	.$ime." ".$prezime." <b>E-mail i mob: </b>".$email.", ".$tel." <b>Model auta, godina proizvodnje i km:: </b>"
	.$model.", ".$godina.", ".$km;
	$mail->addAddress('ivagavran314@gmail.com');

	if ( $mail->send() ) 
		echo '    
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="css/mail.css">
        </head>
        <body>
            <h2 class="zahvala">Hvala na upitu!</h2>
            <h3 class="odgovor">Odgovorit ćemo Vam u najkraćem mogućem roku.</h3>
            <div class="btn-text-center">
            <a class="btn btn-outline-light btn-lg back-button" href="index.html">Povratak</a>
          </div>
        </body>
        </html>  
        ';
	else
		echo "Error!";

	$mail->smtpClose();

?>