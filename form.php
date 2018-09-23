<?php

require_once('init.php');

$insertdata = new DataOperations();
$conn = new Database();

if(isset($_POST['create'])){
    $myArray = array(
        'name'=>mysqli_real_escape_string($conn->connection, $_POST['name'])
    );
    
    $insertdata->insert_record("posts",$myArray);
    
}

?>
<form method="POST" action="" enctype="multipart/form-data">
    
    <input type="text" name="name">
    <input type="submit" name="create">

</form>