<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $country = $_POST["country"];
    $subject = $_POST["subject"];
    
    // Do something with the form data, like sending an email or saving to a database
    // For demonstration purposes, let's just print the data
    echo "First Name: " . $firstname . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Country: " . $country . "<br>";
    echo "Subject: " . $subject . "<br>";
    echo "Thank You for Your response";
}
?>