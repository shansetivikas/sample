<?php
require_once('init.php');
$obj = new DataOperations();
?>
<table>
    <thead>
       <tr>
         <td>Name:</td> 
       </tr>
    </thead>
    <tbody>
        <?php
          $myrow = $obj->fetch_record("posts");
        
          foreach($myrow as $row){?>
               <tr>
                  <td><?php echo $row['name'];?></td>
               </tr>
         <?php }
        
        ?>
       
    </tbody>
</table>