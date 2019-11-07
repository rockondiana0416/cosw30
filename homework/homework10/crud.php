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

        if(!empty($first_name) || (!empty($last_name)) || (!empty($email)) || (!empty($password))) {

            $insert_query = "INSERT INTO USER_HINCHCLIFFE (first_name, last_name, email, password)
                            VALUES ('$first_name', '$last_name', '$email', '$password')";

            $result = mysqli_query($connection, $insert_query);
            }

            if ($result) {
                    echo 'New user added to the database.';
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
        } else {
            // Output an error
            echo 'This does not work';
        }
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
    <link>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Dancing+Script');
    @import url('https://fonts.googleapis.com/css?family=Montserrat');
    html {
        background: #d15766;
    }
    h1 {
        font-family: 'Dancing Script', cursive;
        color: #bcc3c8;
        text-align: center;
        border: 5px solid #364e62;
        padding: 20px;
    }
    #register {
        font-family: 'Montserrat', sans-serif;
        font-size: 25px;
        padding: 10px;
        text-align: center;
        color: #364e62;
    }
    </style>
</head>
<body>
    <h1>Create a New User</h1>
    <form id="register" action="crud.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <label for="password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password"><br>
        <button>Register</button>
    </form>

    <h1>Output of Registered Users</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php // You will be adding a forEach loop here to output the users
            foreach ($rows as $row) {
            echo '<tr class="left">
                    <td>'.$row['first_name'].'</td>
                    <td>'.$row['last_name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['password'].'</td>
                    <td><a href="update.php?id='.$row['user_id'].'">Edit</a></td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>