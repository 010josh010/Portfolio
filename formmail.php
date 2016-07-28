<!DOCTYPE html>
<html lang="en">

  <head>
   
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
	<meta name = "description" content = "Please use the provided contact form to send us your feedback and comments. If you have any questions will we get back to you as soon as we can. Thank you.">
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META HTTP-EQUIV="refresh" content="0;URL=contact.html">
<title>Email Form</title>
      </META>
    </head>

<body>
<?php
  $name=addslashes($_POST['name']);
  $email=addslashes($_POST['email']);
  $message=addslashes($_POST['message']);

 // you can specify which email you want your contact form to be emailed to here

  $toemail = "010josh010@gmail.com";
  $subject = "@Joshua Vaughn";

  $headers = "MIME-Version: 1.0\n"
            ."From: \"".$name."\" <".$email.">\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  $body = "Name: ".$name."<br>\n"
            ."Email: ".$email."<br>\n"
            ."Message:<br>\n"
            .$message;

  if (!ereg("^[a-zA-Z0-9_.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $email))
  {
    echo "That is not a valid email address.  Please return to the"
           ." previous page and try again.";
    exit;
  }

    mail($toemail, $subject, $body, $headers);
    echo "Thanks for submitting your comments";
?>


<script>
    var submit = document.getElementById("submit"); 
    var name = document.getElementById("name");
    var email= document.getElementById("email");
    var message= document.getElementById("message"); 
    submit.onclick = function(){
       for(i=0;i <=email.value.length; i++){
                if(email.value[i] === "@" && name.value !== "" && message.value !== ""){
                    alert("Thank you for your message!"); 
                }
            };
        
    }
    </script>
</body>

</html>