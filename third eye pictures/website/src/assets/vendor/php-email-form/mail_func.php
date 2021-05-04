<?php
/**
*-Programmer-Baba Chintha Haris
*-https://www.fiverr.com/bcharis?up_rollout=true
*
*	--> PHPMailer(PHP Version 5.5.) https://github.com/PHPMailer/PHPMailer/
**/

//PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

	//One time password email functions
	function send_mail($Client,$ClienEm,$Subject,$Messg) {
		//Change your Time zone it's important
		date_default_timezone_set('Asia/Colombo');
		
		require 'phpmailer/src/Exception.php';
		require 'phpmailer/src/PHPMailer.php';
		require 'phpmailer/src/SMTP.php';

		//Email Configuration
		//Put here System Email Address Settings-example:- noreply@sample.com
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';	//Secure type tls or ssl
		$mail->Port     = "465";	//Mail server port
		
		$message_body = SentMail_Body($Client,$ClienEm,$Subject,$Messg);

		$mail->Username = "info@example.com";				//Mail Service email Address.
		$mail->Password = "youremail password";				//Mail Service email Password.
		$mail->Host     = "example.com";					//Mail Service email host.
		$mail->Mailer   = "smtp";							//Mail Service smtp.							
		$mail->SetFrom("info@example.com", "Info"); 		//Mail service email address.
		$mail->AddAddress("example@gmail.com");				//Replace contact@example.com with your real receiving email address

		$mail->Subject = "New message from your website";	//Mail Subject

		$mail->MsgHTML($message_body); //HTML BODY MESSEGE
		$mail->IsHTML(true);		
		$result = $mail->Send();		
		
		return $result;
	}

	//HTML BODY MESSEGE template
	function SentMail_Body($Cname,$Cmail,$Csubject,$Cmessg){
		$GetZONEtime = date('Y-m-d H:i:s A');

		//Email HTML tempplate you can use your own templates
		//($USER_ID,$USER_NAME,$IPadd,$weblink) variables
		$DATAbody ='<!DOCTYPE html>
		<html>
		<head>
		
		  <meta charset="utf-8">
		  <meta http-equiv="x-ua-compatible" content="ie=edge">
		  <title>OTP</title>
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <style type="text/css">
		  @media screen {
			@font-face {
			  font-family: "Source Sans Pro";
			  font-style: normal;
			  font-weight: 400;
			  src: local("Source Sans Pro Regular"), local("SourceSansPro-Regular"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format("woff");
			}
		
			@font-face {
			  font-family: "Source Sans Pro";
			  font-style: normal;
			  font-weight: 700;
			  src: local("Source Sans Pro Bold"), local("SourceSansPro-Bold"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format("woff");
			}
		  }
		
		  body,
		  table,
		  td,
		  a {
			-ms-text-size-adjust: 100%; /* 1 */
			-webkit-text-size-adjust: 100%; /* 2 */
		  }
		
		  table,
		  img {
			-ms-interpolation-mode: bicubic;
		  }
		
		  a[x-apple-data-detectors] {
			font-family: inherit !important;
			font-size: inherit !important;
			font-weight: inherit !important;
			line-height: inherit !important;
			color: inherit !important;
			text-decoration: none !important;
		  }
		
		  div[style*="margin: 16px 0;"] {
			margin: 0 !important;
		  }
		
		  body {
			width: 100% !important;
			height: 100% !important;
			padding: 0 !important;
			margin: 0 !important;
		  }
		
		  table {
			border-collapse: collapse !important;
		  }
		
		  a {
			color: #1a82e2;
		  }
		
		  img {
			height: auto;
			line-height: 100%;
			text-decoration: none;
			border: 0;
			outline: none;
		  }
		  </style>
		
		</head>
		<body style="background-color: #e9ecef;">
		  <table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
			  <td align="center" bgcolor="#e9ecef">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
				  <tr>
					<td align="center" valign="top" style="padding: 24px 24px; background-color: #fe4157;">
						<a href="#" target="_blank" style="display: block; color: #070707; font-size: 18px; font-weight: bold;">MAX PRODUCTION</a>
					</td>
				  </tr>
				</table>
			  </td>
			</tr>
			<tr>
			  <td align="center" bgcolor="#e9ecef">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
				  <tr>
					<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
					  <h1 style="margin: 0; font-size: 26px; font-weight: 400; letter-spacing: -1px; line-height: 48px;">New Contact Form Message</h1>
					</td>
				  </tr>
				</table>
			  </td>
			</tr>
			<tr>
			  <td align="center" bgcolor="#e9ecef">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
				  <tr>
					<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
					  <p style="margin: 0;">New message from the client. max production contact us page</p>
					</td>
				  </tr>
				  
				  <tr>
					<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
					  <p style="margin-bottom: 5px;">Message Infomation:</p>
                      <p style="margin: 0; font-size: 14px;">Name:'.$Cname.'</p>
					  <p style="margin: 0; font-size: 14px;">Email:'.$Cmail.'</p>
                      <p style="margin: 0; font-size: 14px;">Subject:'.$Csubject.'</p>
                      <p style="margin: 0; font-size: 14px;">Message:'.$Cmessg.'</p>
                      <p style="margin: 0; font-size: 14px;">Sent Time:'.$GetZONEtime.'</p>
					</td>
				  </tr>
		
				  <tr>
				  </tr>
				  <tr>
					<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
					  <p style="margin: 0;">Sincerely,<br> Max-Team</p>
					</td>
				  </tr>
				</table>
			  </td>
			</tr>
			<tr>
			  <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
				  <tr>
					<td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
					  <p style="margin: 0;">Please note that, our timezone is GMT +6(i.e 11 hours ahead from EST time)</p>
					</td>
				  </tr>
				</table>
			  </td>
			</tr>
		  </table>
		</body>
		</html>';

		return $DATAbody;
	}

?>