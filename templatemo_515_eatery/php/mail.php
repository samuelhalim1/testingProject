<?php
	include "classes/class.phpmailer.php";
	$name = isset($_POST['name']) ? $_POST['name'] : "name";
	$institution = isset($_POST['institution']) ? $_POST['institution'] : "institution";
	$phone = isset($_POST['phone']) ? $_POST['phone'] : "phone";
	$email = isset($_POST['email']) ? $_POST['email'] : "email";
	$mediaString = isset($_POST['mediaString']) ? $_POST['mediaString'] : "mediaString";

	$mail = new PHPMailer; 
	$mail->IsSMTP();
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = "tampilberita.com"; //host masing2 provider email
	$mail->SMTPDebug = 2;
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->Username = "sender@tampilberita.com"; //user email
	$mail->Password = "senderemail123"; //password email

	$fileTotal = isset($_POST['filesTotal']) ? $_POST['filesTotal'] : 0;
	for ($x = 0; $x < $fileTotal; $x++) {
		$files = $_FILES['files_'.$x];
	    $file_name = $files['name'];
	    $file_size = $files['size'];
	    $file_tmp = $files['tmp_name'];
	    $file_type = $files['type'];
	    $file_path = realpath(dirname(getcwd())).'\uploads\\'.$file_name;
	
      	move_uploaded_file($file_tmp, $file_path);
      	$mail->addAttachment($file_path);
	}
	$docFile = $_FILES['docFile'];
	$doc_name = $docFile['name'];
	$doc_size = $docFile['size'];
	$doc_tmp = $docFile['tmp_name'];
	$doc_type = $docFile['type'];
	$doc_path = realpath(dirname(getcwd())).'\uploads\\'.$doc_name;
	move_uploaded_file($doc_tmp, $doc_path);
		 //The folder where you would like your file to be saved
	$mail->addAttachment($doc_path);
	
	$mail->SetFrom("sender@tampilberita.com","Website"); //set email pengirim
	$mail->Subject = "New Press Release (".$name ." - " .$email .")"; //subyek email
	$mail->AddAddress("singgih@tampilberita.com","Singgih - CEO"); //tujuan email
	$mail->MsgHTML('
		<html> 
		    <body> 
		        <h1>New Press Release Request!</h1> 
		        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
		            <tr> 
		                <th>Name:</th><td>' .$name. '</td> 
		            </tr> 
		            <tr style="background-color: #e0e0e0;"> 
		                <th>Institution:</th><td>' .$institution. '</td> 
		            </tr> 
		            <tr> 
		                <th>Phone:</th><td>' .$phone. '</td> 
		            </tr> 
		            <tr style="background-color: #e0e0e0;"> 
		                <th>Email:</th><td>' .$email. '</td> 
		            </tr> 
		            <tr style="background-color: #e0e0e0;"> 
		                <th>Media Chosen:</th><td>' .$mediaString. '</td> 
		            </tr> 
		        </table> 
		    </body> 
    	</html>'
	);
	if($mail->Send()) echo "Message has been sent";
	else echo "Failed to sending message";
// };
?>