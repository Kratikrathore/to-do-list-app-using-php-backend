
<?php include'connect.php'; ?>
<script src="https://kit.fontawesome.com/70af6cfbd8.js" crossorigin="anonymous"></script>
        <table border="1px" cellspacing="0px" cellpadding="10px" style="border-color:darkslategray;">
            <tr>
                <th>Task</th>
                 <th>Actions</th>
            </tr>
            <?php
$sql="select * from todo";
$data=mysqli_query($con, $sql);
$result=mysqli_num_rows($data);
if($result){
    while($row=mysqli_fetch_array($data)){
    ?>
                <tr>
                    <td>
                        <?php echo $row['task']; ?>
                    </td>
                    
                    
                    
                    <td><a onclick="return confirm('Are you sure, you want to delete?')" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa-duotone fa-trash"></i></a></td>
                </tr>
                <?php
    }
}
?>
        </table>
