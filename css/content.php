<?php
					$name= $_POST['Name'];
					$email= $_POST['Email'];
					$subject= $_POST['Subject'];
					$message= $_POST['Message'].' '.$name.' '.$email;
					
					if(isset($_POST['Trimite'])){
						if($name != '' && $email != '' && $subject != '' && $message != '')
						{
							if(strlen($name) > 4 ){
							mail('mihai.leonard01@yahoo.com', $subject, $message);
							
							
							echo 'Mesajul a fost trimis!';
							}
							else{
							echo 'Numele este prea scurt!';
							}
						}
							
							else{
							echo 'Completează toate casuțele!';
							}
							
					}
?>