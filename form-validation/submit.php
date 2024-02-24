<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $city = $_POST["city"];

        // Send email (you need to configure your email settings here)
        $to = $email;
        $subject = "Form Submission";
        $message = "Name: $name\nEmail: $email\nPhone: $phone\nPassword: $password\nCity: $city";

        mail($to, $subject, $message);

        // Return a success response
        http_response_code(200);
        echo "Form submitted successfully!";
    } else {
        // Invalid request method
        http_response_code(400);
        echo "Invalid request method.";
    }
?>
