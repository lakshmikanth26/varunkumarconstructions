
<?php
// var_dump($_POST);

//if(isset($_POST['save'])){
     $name         =     $_POST['name'];
     $email        =     $_POST['email'];
     $mobile        =     $_POST['mobile'];
     $subject       =   $_POST['subject'];
     $message      =     $_POST['message'];
    

    $to = "varunconstructions5110@gmail.com";
    $from_email     = 'info@varunkumarconstructions.com';
   
    $txt = "\r\nName : ".$name."<br><br>\r\n
                Email : ".$email."<br><br>\r\n
                Mobile Number : ".$mobile."<br><br>\r\n
                Subject : ".$subject."<br><br>\r\n
                Message : ".$message ;

    $headers = "From: info@varunkumarconstructions.com" . "\r\n" .
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   
    print"$to.$subject.$txt.$headers";
    mail($to,$subject,$txt,$headers);
    header('Location: contact.php?msg=success');

//} else {
   // header('Location: enquiry.php?msg=error');
//}
 ?>
