<?php
// error_reporting(E_ALL);
//echo phpinfo();
//exit;
$name=$_POST['name'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$sugg=$_POST['sugg'];

extract($_POST, EXTR_OVERWRITE);

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//$headers .= "From: $email\n";
$recipient="fbp.leads@gmail.com,crm@fullbasketproperty.com,priyankar@fullbasketproperty.com";


$message="\Full Basket Properties Offers- Instant Call Back \n";


//$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';

// $email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );

//subject
//========
$subject="Full Basket Properties Offers - PPC - Instant Call Back ";

//message
//=======
 /*$message.="\nName                    : $name \n";
 
 $message.="\nCompany Name            : $company \n";
 
 $message.="\nAddress                 : $address \n";
 
 if($telephone)
 {
 $message.="\nTelephone               : $telephone \n";
 }
 
 $message.="\nEmail ID                : $email \n";
 
 if($sugg)
 {
 $message.="\nEnquiry                 : $sugg \n";
 }*/
$message = '<table width="500" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFF" style="font-weight: 700;font-size: 12px;color: #666;font-family:Arial, Helvetica, sans-serif; background-color:#FFFFFF;">
  <tr bgcolor="#055b82">
    <td width="500" colspan="2" style="font-weight: 700;font-size: 13px;color: #FFF; border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Full Basket Properties Offers- Call Back</td>
  </tr>
 
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Name</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$name.'</td>
  </tr>  
  
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-right:none; padding:10px;">Number</td>
    <td width="250" style="border: 1px solid #CCC; padding:10px;">'.$telephone.'</td>
  </tr>
  </table>';
  
 // echo $message: exit;
 //Send Mail
//===========
mail($recipient, $subject, $message, $headers);
 	echo "<meta http-equiv='REFRESH' content='0;url=call-back-received.html'>";
 /* }
else{
 // print_r(error_get_last());
	echo "<meta http-equiv='REFRESH' content='0;url=thanks.php'>";
}*/
$headers1="";
?>
