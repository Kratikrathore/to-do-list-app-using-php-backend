<?php
    include 'connect.php';
    $id=$_GET['id'];
    $sql="delete from todo where id='$id'";
    $data=mysqli_query($con, $sql);
    if($data){
    ?>
    <script>
        alert("Data Deleted");
        
    </script>
    <?php
    header('Location:todo.php');
    }
    else{
    ?>
    <script>
        alert("Sorry, Data Not Deleted");
    </script>
    <?php
    }  
?>