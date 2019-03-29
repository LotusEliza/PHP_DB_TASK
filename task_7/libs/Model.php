<?php 

class Model
{ 
   public function __construct()
   {

   }
   	
	public function getArray()
   {	    
		return array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field');	
   }
	
	public function checkForm()
	{
        // if(isset($_POST['firstname']) && isset($_POST['email'])
        // && isset($_POST['subject']) && isset($_POST['comment'])){

        // }

        $emp_name=trim($_POST["firstname"]);
        $emp_number=trim($_POST["email"]);
        $emp_subject=trim($_POST["subject"]);
        $emp_email=trim($_POST["comment"]);

        if($firstname =="") {
            $errorMsg=  "error : You did not enter a name.";
            $code= "1" ;
        }
        elseif($email == "") {
            $errorMsg=  "error : Please enter number.";
            $code= "2";
        }
        //check if the number field is numeric
        // elseif(is_numeric(trim($emp_number)) == false){
        //     $errorMsg=  "error : Please enter numeric value.";
        //     $code= "2";
        // }
        // elseif(strlen($emp_number)<10){
        //     $errorMsg=  "error : Number should be ten digits.";
        //     $code= "2";
        // }
        // //check if email field is empty
        // elseif($emp_email == ""){
        //     $errorMsg=  "error : You did not enter a email.";
        //     $code= "3";
        // } //check for valid email 
        // elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emp_email)){
        // $errorMsg= 'error : You did not enter a valid email.';
        // $code= "3";
        // }
        else{
            
        echo "Success";
        //final code will execute here.
        }

		return true;			
	}
   
	public function sendEmail()
	{
        if(isset($_POST['firstname']) && isset($_POST['email'])
        && isset($_POST['subject']) && isset($_POST['comment'])){
        $firstname=$_POST['firstname'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $comment=$_POST['comment'];
        
        $to='lotuselizza@gmail.com';
        $subject="New Order";
        $body="<html>
                    <body>
                        <p>First Name:.$firstname.<br></p>
                        <p>Address:.$email.<br></p>
                        <p>Quantity:.$quantity.<br></p>
                        <p>Book ID:.$subject.<br></p>
                        <p>Book Name:.$comment.<br></p>
        </body>
        </html>";
            $headers  ="From:".$firstname."<".$email.">\r\n";
            $headers .="reply-To:".$email."\r\n";
            $headers .="NINE-Version: 1.0\r\n";
            $headers .="Content-type: text/html; charset=utf-8";
        //confirmation mail
            $user=$email;
            $usersubject = "Email to Admin";
            $userheaders = "From: lotuselizza@gmail.com\n";
            $usermessage = "Thank you for your letter! We will connect you ASAP!!!";
        //sending process
            $send=mail($to, $subject, $body, $headers);
            $confirm=mail($user, $usersubject, $userheaders,$usermessage );
            if($send && $confirm){
                
                echo "Sucses";
            }
            else{
                echo "Failed";
            }
        }
		// return mail()
	}		
}
