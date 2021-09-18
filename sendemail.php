
<?php 
   
   use PHPMailer\PHPMailer\PHPMailer; 
   use PHPMailer\PHPMailer\Exception; 
     
   require 'src/Exception.php'; 
   require 'src/PHPMailer.php'; 
   require 'src/SMTP.php'; 
     
   //require 'vendor/autoload.php'; 
     
   $mail = new PHPMailer(true); 
     
   try { 
            //    $mail->SMTPDebug = 2;                                                                                                    
               $mail->isSMTP();                                                                                                                         
               $mail->Host        = 'smtp.gmail.com;';                                                        
               $mail->SMTPAuth = true;                                                                           
               $mail->Username = 'djain01012002@gmail.com';                                     
               $mail->Password = 'Divyanshu@20';                                                              
               $mail->SMTPSecure = 'tls';                                                                         
               $mail->Port         = 587; 
     
               $mail->setFrom("jdivyanshu66@gmail.com", "Divyanshu");             
               $mail->addAddress('divyanshu.tca1959012@tmu.ac.in'); // where you want to send mail 
               
               
               $mail->isHTML(true);                                                                                            
               $mail->Subject = 'Enquiry about E-Store'; 
               $mail->Body = "Name- ". $_POST["name"]. "<br>" . "Message -" .$_POST["message"]. "<br>" . "Email-id - ".$_POST["email"]; 
               $mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
               $mail->send(); 
               echo "Mail has been sent successfully!"; 
   } catch (Exception $e) { 
               echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
   } 
     
   ?> 
