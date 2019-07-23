<?php 
    //if "email" variable is filled out, send email   
    if (isset($_REQUEST['email']))  {      
    //Email information   
    $admin_email = "fgonzalez97575@gmail.com";   
    $email = $_REQUEST['email'];   
    $name = $_REQUEST['subject'];   
    $message = $_REQUEST['message'];      
    //send email   
    mail($admin_email, "$name", $message, "From:" . $email);      
    //Email response   
    echo "Thank you for contacting us!";   }      
    //if "email" variable is not filled out, display the form   
    else  { ?>   <form method="post">
    Email: <input name="email" type="text" />
    Subject: <input name="name" type="text" />
    Message:
    <textarea name="message" rows="15" cols="40"></textarea>
    <input type="submit" value="Submit" />   </form>    <?php   } 
    ?>