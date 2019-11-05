<?php
// Add the database connection
include('database.php');
/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if(empty($first_name)) {
            echo "Please enter your first name!</p>";
        }
        if(empty($last_name)) {
            echo "Please enter your last name!</p>";
        }
        if(empty($email)) {
                echo "Please enter your email address!</p>";
        }
        if(empty($password)) {
            echo "Please enter a password!</p>";
        }
        if(empty($confirm_password) || $confirm_password != $password) {
            echo"Please confirm your password!</p>";
        }

        if($first_name || $last_name || $email || $password || $confirm_password === $password) {
            $insert_query = "INSERT INTO USER_HINCHCLIFFE (first_name, last_name, email, password)
                            VALUES ('$first_name', '$last_name', '$email', '$password')";

            $result = mysqli_query($connection, $insert_query);

            } else { echo 'Please check your form.';
            }

            if ($result) {
                    echo 'new user added to the database';
                }   else {
                    echo 'error entering new user';
                }
            }
        /*
        *   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
        */
        // Create your query
        $query = 'SELECT * FROM USER_HINCHCLIFFE';
        // Run your query
        $result = mysqli_query($connection, $query);
        // Check if the database returned anything
        if($result) {
            // If the database query was successful, store
            // the array of users into a variable
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            print_r($rows);
        } else {
            // Output an error
            echo 'This does not work';
        }
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <label for="password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password"><br>

        <button>Register</button>
    </form>

    <h2>Output a List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Confirm Password</th>
            </tr>
        </thead>
        <tbody>
            <?php // You will be adding a forEach loop here to output the users
            foreach ($rows as $row) {
            echo '<tr>
                    <td>'.$row['first_name'].'</td>
                    <td>'.$row['last_name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['password'].'</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>