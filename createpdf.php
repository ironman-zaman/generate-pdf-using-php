<?php

if (isset($_POST["submit"])) {
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $data = "";
    $data .= "<h1>Your Details</h1>";
    $data .= "<strong>Full Name :</strong> " . $fullName . "<br>";
    $data .= "<strong>Email : </strong>" . $email . "<br>";
    $data .= "<strong>Phone : </strong>" . $phone . "<br>";
    $data .= "<strong>Message : </strong>" . $message . "<br>";

    require_once __DIR__ . '/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($data);
    $mpdf->Output("mypdffile.pdf","D");

    
}
?>