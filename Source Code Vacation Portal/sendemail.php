<?php 
if(isset($_POST['submit'])){
    $to = "admin@admin.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];;
    $subject = "Form submission";
    $message ="Dear supervisor, employee".$name." requested for some time off, starting on".$leave_from. "and ending on".$leave_to.",stating the reason".$leave_description.
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
?>