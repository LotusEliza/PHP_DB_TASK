<?php 

class Model
{ 
    protected $my_array; 


    public function __construct()
    {
     $this->array=['%TITLE%'=>'Contact Form',
                 '%ERRORS%'=>'Empty field',
                 '%NAME%' => 'name',
                 '%ERROR_NAME%'=>'',
                 '%FIRSTNAME%'=>''];
    }
        
     public function getArray()
    {	 
        return  $this->array;  
         // return array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field', '%NAME%' => $_POST["firstname"], '%ERROR%'=>'');
    }
     
     public function checkForm()
     {
         if (empty($_POST["firstname"])) {
             $array=$this->getArray();
             $this->array['%ERROR_NAME%']="no name";
         }
         else {
             $firstname = $_POST["firstname"];
             $this->array['%FIRSTNAME%']=$_POST["firstname"];
         }
 
         if (empty($_POST["email"])) {
             $array=$this->getArray();
             $this->array['%ERROR%']="no name";
         }
         else {
             $firstname = $_POST["firstname"];
             $this->array['%FIRSTNAME%']=$_POST["firstname"];
         }
 
         if (empty($_POST["email"])) {
             $addrErr = "Missing";
         }
         else {
             $address = $_POST["email"];
         }


//        if (!isset($_POST["howMany"])) {
//            $howManyErr = "You must select 1 option";
//        }
//        else {
//            $howMany = $_POST["howMany"];
//        }

        if (empty($_POST["comment"])) {
            $favFruitErr = "You must select 1 or more";
        }
        else {
            $favFruit = $_POST["comment"];
        }





        // if(isset($_POST['firstname']) && isset($_POST['email'])
        // && isset($_POST['subject']) && isset($_POST['comment'])){

        // }

        /////////////////////////////////////////////////////
//        $emp_name=trim($_POST["firstname"]);
//        $emp_email=trim($_POST["email"]);
//        $emp_subject=trim($_POST["subject"]);
//        $emp_comment=trim($_POST["comment"]);
//
//        if($emp_name =="") {
//            $errorMsg=  "error : You did not enter a name.";
//            echo $errorMsg;
////            $code= "1" ;
//        }elseif($emp_email == "") {
//            $errorMsg=  "error : You didn't enter your email.";
////            $code= "2";
//            echo $errorMsg;
//        }
        ////////////////////////////////////////////////
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
        ////////////////////////////////////////////////
//        else{
//
//        echo "Success";
//        //final code will execute here.
//        }
        /////////////////////////////////////////////

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
