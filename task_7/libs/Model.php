<?php 

class Model
{ 
    protected $array;
    protected $setval;

    public function __construct()
    {
     $this->array=['%TITLE%'=>'Contact Form',
                 '%ERRORS%'=>'Empty field',
                 '%ERROR_NAME%'=>'',
                 '%ERROR_EMAIL%'=>'',
                 '%ERROR_COMMENT%'=>'',
                 '%NAME%' => '',
                 '%EMAIL%' => '',
                 '%COMMENT%' => '',
                 '%SUBJECT1%' => '',
                 '%SUBJECT2%' => '',
                 '%SUBJECT3%' => '',
                 '%ERROR_SUBJECT%' => ''];
    }
        
     public function getArray()
    {	 
        return  $this->array;
    }

    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

     public function checkForm()
     {

        //----------------------------CHECK NAME------------------------------------
         if (empty($_POST["name"])) {
             $this->array['%ERROR_NAME%'] = "Name is required";
         } else {
             $name = $this->test_input($_POST["name"]);
             if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                 $this->array['%ERROR_NAME%'] = "Only letters and white space allowed";
             } else {
                 $this->array['%NAME%'] = $name;
                 $this->setval+=1;
             }
         }

        //----------------------------CHECK EMAIL------------------------------------
         if (empty($_POST["email"])) {
            $this->array['%ERROR_EMAIL%']="Email is required";
         }else {
            $email = $this->test_input($_POST["email"]);
            if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email)) {
                $this->array['%ERROR_EMAIL%'] = "Invalid email format";
            }else{
                $this->array['%EMAIL%'] = $email;
                $this->setval+=1;
            }
         }

         //----------------------------CHECK SUBJECT------------------------------------
         if (empty($_POST["subject"])) {
             $this->array['%ERROR_SUBJECT%']="Subject is required";
         }else{
             if($_POST["subject"]=="subject1"){
                 $this->array['%SUBJECT1%']="selected = \"selected\"";
                 $this->setval+=1;
             }elseif ($_POST["subject"]=="subject2"){
                 $this->array['%SUBJECT2%']="selected = \"selected\"";
                 $this->setval+=1;
             }elseif ($_POST["subject"]=="subject3"){
                 $this->array['%SUBJECT3%']="selected = \"selected\"";
                 $this->setval+=1;
             }
         }

         //----------------------------CHECK COMMENT------------------------------------
        if (empty($_POST["comment"])) {
            $this->array['%ERROR_COMMENT%']="Comment is required";
        } else {
            $comment = $this->test_input($_POST["comment"]);
            $this->array['%COMMENT%'] = $comment;
            $this->setval+=1;
        }

        if($this->setval == 4){
            return true;
        }else{
            return false;
        }
	}
   
	public function sendEmail()
	{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subj=$_POST['subject'];
        $comment=$_POST['comment'];
        
        $to='lotuselizza@gmail.com';
        $subject=$subj;
        $body="$name .$email . $subj . $comment";
            $headers  ="From:".$name."<".$email.">\r\n";
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
                $this->refresh();
            }
            else{
                $this->refresh();
            }
        }

        public function refresh(){

            //------------------REFRESH PAGE AFTER SENDING--------------------------
            $page = $_SERVER['PHP_SELF'];
            $sec = "2";
            unset($_POST);
            header("Refresh: $sec; url=$page");
        }
}
