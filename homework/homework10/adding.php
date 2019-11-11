<?php

if(isset($_POST['delete'])) {
    $id_to_delete = mysqli_real_escape_string($connection, $_POST['id_to_delete']);

    $sql = "DELETE FROM USER_HINCHCLIFFE WHERE id = id_to_delete";
    if(mysqli_query($connection, $sql)) {
        header('Location: crud.php');
    }
    else {
        echo 'User not deleted.';
    }
}

?>

<input type="hidden" name="id_to_delete" value="<?php echo $id?>">
        <input type="submit" name="delete" value="Delete" class="btn">
        <input type="hidden" name="user_id" value="<?php echo $id?>">