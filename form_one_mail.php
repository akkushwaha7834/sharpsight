<?php 
if(isset($_POST['submit_button'])){
    $email_to = "digital.sharpsight@gmail.com, digital@sharpsight.in"; // this is your Email address
    $from = $_POST['email_id']; // this is the sender's Email address
    $name = $_POST['your_name'];
    $mobile = $_POST['mobile_number'];
    $customer_query = $_POST['customer_query'];

    $subject = "Consult to Doctors";
    $message = "Name:- ". $name . "\n\n" . "Email:- ". $from. "\n\n" . "Mobile Number:- " . $mobile. "\n\n". "Query:- ".$_POST['customer_query'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $email_to;
    mail($email_to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location: thank-you-srinagar.html');
    }
?>