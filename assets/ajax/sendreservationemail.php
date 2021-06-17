<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pname      =   $_POST['txt_fname'];
    // $psubject   =   $_POST['txt_subject'];
    // $pmsg       =   $_POST['txt_msg'];
    $pmail      =   $_POST['txt_mail'];

    $msg    =   '';
    $msg    .=  '<b>Full Name : </b>' . $pname . '<br />';
    // $msg    .=  '<b>Subject : </b>' . $psubject . '<br />';
    // $msg    .=  '<b>Message : </b>' . $pmsg . '<br />';
    $msg    .=  '<b>E-mail : </b>' . $pmail . '<br />';
    $to     =   "jacobhills.service@gmail.com";
    
    $subject    =   $psubject;
    
    // Always set content-type when sending HTML email
    $headers    =   "MIME-Version: 1.0" . "\r\n";
    $headers    .=  "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers    .=  'From: <jacob@hills.com>' . "\r\n";

    //$headers .= 'Cc: myboss@example.com' . "\r\n";
    
    @mail($to,$subject,$msg,$headers);
    echo "1";
} ?>