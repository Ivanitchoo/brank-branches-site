<?php
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];
       $from = 'From: My Contact Form';
       $to = 'testaphp9@gmail.com';
       $subject = 'contact message';

       $body = "From: $name\n E-Mail: $email\n Message:\n $message";

     

      
          mail ($to, $subject, $body, $from) 
         
           
       
    ?>