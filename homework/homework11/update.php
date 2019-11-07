<?php
// Add the database connection
/*

*   CHECK IF THE URL HAS A $_GET VARIABLE CALLED ID
*/

if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // redirect to crud.php
}
    header('');
    exit;
    echo id;
/*
*   AFTER SUBMITTING THE UPDATE FORM, UPDATE THE INFO
*   IN THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    // Validate the inputs (check if they're empty)
        $errors = [];
        if(condition) {
            $errors[] = 'error message']

        }

        if(empty($))
    // If they aren't empty, create and run your query
    $update_query = "UPDATE USER_HINCHCLIFFE
                SET first_name = '$first_name',
                    last_name = 'last_name',
                    email = $email,
                    password = '$password'
                    WHERE ";

    // Check if the database returned anything
        // If the UPDATE query was successful, redirect to
        // the crud.php page
        // Else, output an error message
}
/*
*   QUERY THE DATABASE FOR THE USER THAT HAS THE GET ID
*/
// Create your query
$query = "SELECT * FROM USER_Hinch WHERE user_id = $id";
// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    // If the database query was successful, store
    // the users information into a variable
    $user = mysqli_fetch_assoc($result);
    print_r(user);

} else {
    // Output an error message
}
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="update.php?id=7????" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>

        <label for="password">Password</label>
        <input type="text" id="password" name="password" value="<?php echo $password; ?>"><br>

        // <input type="hidden" name="user_id" value>

        <button>Update User</button>
    </form>
</body>
</html>