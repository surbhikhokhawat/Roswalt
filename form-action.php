<?php

$to ='pinaka2022@gmail.com,akashasati94@gmail.com';

$first_name = $_POST["first_name"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$configuration= $_POST["configuration"];
$site_visit_availablity= $_POST["site_visit_availablity"];
$agree_to_contact= $_POST["agree_to_contact"];
// Subject
$subject='New Form Submisstion';

// Message
$message = '
<html>
<head>
  <title>new Enquiry</title>
</head>
<body>
  <p>puraniks-abitante Enquiry from Website</p>
  <table>
    <tr>
      <td>Name: '. $first_name .' </td>
    </tr>
    <tr>
      <td>Email: '. $email .' </td>
    </tr>
    <tr>
      <td>Mobile: '. $phone .' </td>
    </tr>
	 <tr>
      <td>Configuration: '. $configuration .' </td>
    </tr>
    <tr>
      <td>site_visit_availablity_: '. $site_visit_availablity .' </td>
    </tr>
    <tr>
      <td>agree_to_contact: '. $agree_to_contact .' </td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Mail it
 if(@mail($to, $subject, $message, implode("\r\n", $headers))){
 
/*"<script>alert('Your mail has been sent successfuly! Thank you!!')</script>";
 "<meta http-equiv='refresh' content='0; url=https://aros-liferepublic-marunji.in/'>";
}
else{
    "<script>alert('failed! please try again')</script>";
    "<meta http-equiv='refresh' content='0; url=https://aros-liferepublic-marunji.in/'>";}*/
    /*echo "<script>alert(' Registration Send Successfully...')</script>";*/
    echo "<script>window.location='thankyou.html';</script>";
}

?>
