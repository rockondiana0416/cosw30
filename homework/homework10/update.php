<?php
// Add the database connection
include('database.php');

// CHECK IF THE URL HAS A $_GET VARIABLE CALLED ID

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo $id;
} 
else {
    // redirect to crud.php
    header('Location: crud.php');
    exit;
}

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
        // $errors = [];
        // if(failed condition) {
        //     $errors[] = 'Error message';
        // }

        if(empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
            echo '<p class="error">Error! One or more fields were left empty.</p>';
        }
        

    // If they aren't empty, create and run your query
    // WHERE condition is user id = $_GET id
    // Single quotes needed for SQL for strings only!
            else {
                $update_query = "UPDATE USER_HINCHCLIFFE
                                SET first_name = '$first_name',
                                    last_name = '$last_name',
                                    email = '$email',
                                    password = '$password'
                                    WHERE user_id = $id";
                 
        
    

        if($result = mysqli_query($connection, $update_query)) {
            echo 'Your information has been updated';
            header( "Location: crud.php" );
            exit;
        } else {
            echo 'Your information was not updated.';
        }
    }
}

    
    // Check if the database returned anything
        // If the UPDATE query was successful, redirect to
        // the crud.php page
        
        // Else, output an error message


/*
*   QUERY THE DATABASE FOR THE USER THAT HAS THE GET ID
*/
// Create your query
/*$id = $_GET['id'];*/
$query = "SELECT * FROM USER_HINCHCLIFFE WHERE user_id = $id";
// Run your query
$result = mysqli_query($connection, $query);
PRINT_R($RESULT);
// Check if the database returned anything
if($result) {
    // If the database query was successful, store
    // the users information into a variable
    
    $user = mysqli_fetch_assoc($result);
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $email = $user['email'];
    $password = $user['password'];

} else {
    echo 'Information was not updated';
}
?>

<!doctype html>
<html>
<head>
    <title>Update User Infomation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Update User</h1>
    <form id="register" action="update.php?id=<?php echo $id; ?>" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>"><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo $password; ?>"><br>

        <!-- <input type="hidden" name="user_id" value="<?php echo $id; ?>">-->
        
        <!--<input type="submit" name="update" value="Update User" class="btn">-->

        <button>Update User</button>

    </form>
</body>
</html>