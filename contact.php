<?php
// error_reporting(E_ALL);
//echo phpinfo();
//exit;
require_once("dbcon.php");
$name=$_POST['name'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$sugg=$_POST['sugg'];
$city =  isset($_POST['city'])?isset($_POST['city']):'';
$other = isset($_POST['othercity'])?isset($_POST['othercity']):'';
$builder='';
$project ='';
$last_id ='';
$date = date('Y-m-d H:s:i');
$sql = "INSERT INTO leads (name, mobile, email, message, date_added, city, builder, project,othercity)
                    VALUES ('$name','$telephone','$email','$sugg','$date','$city','$builder','$project','$other')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$reg_id = trim("LANDMARK-1011".sprintf("%'.06d",$last_id).PHP_EOL);
//echo $reg_id;die;
extract($_POST, EXTR_OVERWRITE);

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $email\n";
$recipient="shiva@secondsdigital.com";



$message="\Full Basket Properties Offers \n";


//$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';

// $email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );

//subject
//========
$subject="Full Basket Properties Offers";

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
    <td width="500" colspan="2" style="font-weight: 700;font-size: 13px;color: #FFF; border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Full Basket Properties Offers</td>
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Name</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$name.'</td>
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Telephone</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$telephone.'</td>
  </tr>  
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Email ID</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$email.'</td>
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-right:none; padding:10px;">Message</td>
    <td width="250" style="border: 1px solid #CCC; padding:10px;">'.$sugg.'</td>
  </tr>
  </table>';
  
 // echo $message: exit;
 //Send Mail
//=========== 
 mail($recipient, $subject, $message, $headers);
$myfile = fopen("count.txt", "r") or die("Unable to open file!");
$value =  fread($myfile,filesize("count.txt")); 
$myfile = fopen("count.txt", "w") or die("Unable to open file!");
$txt = $value-1;
fwrite($myfile, $txt); 
fclose($myfile);
if($email!="")
{ 
$headers1  = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers1 .= "From: info@leads.com\n"; 
$message1="\ Thank You For Contacting Us and your registration number is \n".$reg_id;
$subject1="Thank You Mail";
  mail($email, $subject1, $message1, $headers1);
} 
  echo "<meta http-equiv='REFRESH' content='0;url=thankyou.html'>";
 /* }
else{
 // print_r(error_get_last());
	echo "<meta http-equiv='REFRESH' content='0;url=thanks.php'>";
}*/
$headers1="";
?>
