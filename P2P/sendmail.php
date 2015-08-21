<?php
    if(isset($_POST['qr']))
    {
		
    	//Deal with the email
    	$to = $_POST['email'];
		$from = 'abisyssolutionsemp11@gmail.com';
    	$subject = 'QR code file';

    	$message = strip_tags("Hi\n\n\rThis QR code is sent By P2P Admin.");
    	$attachment = chunk_split(base64_encode(file_get_contents("product_img/QR/".$_POST['qr'])));
    	$filename = $_POST['qr'];

    	$boundary =md5(date('r', time())); 

    	$headers = "From: $from\r\nReply-To: $from";
    	$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

    	$message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";

		if(mail($to, $subject, $message, $headers))
		{
			echo "true";
		}
		else
		{
			echo "false";
		}
    }
?>