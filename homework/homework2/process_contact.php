<?php
    $type = $_POST['type'];
    
     
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name']; 
        $email = $_POST['email'];
        $dropdown = $_POST['dropdown'];
        $age = $_POST['age'];
        $interests = $_POST['interests'];
        $contribution = $_POST['contribution'];
        $mailing_list = $POST['mailing_list'];
        $comments = $_POST['comments'];
        $correct_email = 'test@test.com';
        
        if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($age)) {
        echo "<h1>Thank you! I'm gonna make you a lot of money<h1>";
        echo "<p>First name: $first_name</p>";
        echo "<p>Last name: $last_name</p>";
        echo "<p>email: $email</p>";
        echo "<p>Gender: $dropdown</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Interests $interests</p>";
        echo "<p>Your comments are very important to me! $comments</p>";
        }
        
        else {
        echo "<p>Your information may be wrong. Please try again</p>";
        echo '<p><a href="process_contact.php">Go back</a></p>';
         }
    
?> 