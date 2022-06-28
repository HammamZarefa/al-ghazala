<?php
if($_POST) {
	$personal = $_POST['personal'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$message = $_POST['message'];

	if($email != '' && $personal != '' && $message != '' && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$personal = htmlspecialchars($personal);
		$email = htmlspecialchars($email);
		$website = htmlspecialchars($website);
		$message = htmlspecialchars($message);
	
		//$headers .= 'From: '.$_POST['email'].' <'.$_POST['email'].'>'.PHP_EOL;
		$headers .= 'MIME-Version: 1.0'.PHP_EOL;
		$headers .= 'Content-type: text/html; charset=utf-8'.PHP_EOL; 
		$email_message = '<html> 
			<head> 
				<title>Private Message</title> 
			</head>
			<body>
				<p>Name and Vorname: '.$_POST['personal'].'</p>
				<p>E-mail: '.$_POST['email'].'</p>
				<p>Website: '.$_POST['website'].'</p>
				<p>Message: '.$_POST['message'].'</p>
			</body>
		</html>';
	 
	 
		mail('myemail@dot.com', 'Private Message', $email_message, $headers); // here put your email
	}
}
?>