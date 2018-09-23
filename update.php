<?php
require_once('init.php');
$obj = new DataOperations();

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $where = array('id'=>$id);
    $myArray = array(
        "name"=>$_POST["name"]
     );
    if($obj->update_record("posts",$where,$myArray)){
        header("Location: https://google.com");
    }
    
    
}

if(isset($_GET['update'])){
    $id = $_GET['id']??null;
    $where = array('id'=>$id);
    $row =$obj->select_record("posts",$where);
?>
     <form action="" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <input type="text" name="name" value="<?php echo $row['name'];?>">
        <input type="submit" name="edit" value="update">
     </form>
<?php
     }
?>



