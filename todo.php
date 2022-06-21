<!doctype html>
<html lang="en">

<head>
    <title>Todolist</title>
    <link rel="stylesheet" href="todo.css">
    
    
    <script src="https://kit.fontawesome.com/70af6cfbd8.js" crossorigin="anonymous"></script>
</head>

<body>
    <form method="post">
        <div class="hii">
            <h1><span class="title"><i class="fas fa-clipboard-list"></i> </span></h1>
            <div class="inputDiv">
                <input type="text" class="input" name="inp" placeholder="Add your task">
                <button class="add" name="submit"><i class="fas fa-plus"></i></button>
            </div>
            <div class="container"></div>
        </div>

      
    </form>
</body>

</html>
<?php include 'connect.php';

    if(isset($_POST['submit']))
    {
    $utask=$_POST['inp'];
    
    

    $sql="insert into todo(task) values('$utask')";
    if(mysqli_query($con,$sql)){
    ?>
    <script type="text/javascript">
        alert("Saved Successfully");
    </script>
    <?php    
    }
    else{
        ?>
        <script type="text/javascript">
        alert("Not Saved");
        </script>
        <?php
    }
}
?>
<center><br><br><br>


<script src="https://kit.fontawesome.com/70af6cfbd8.js" crossorigin="anonymous"></script>
        <table border="0px" cellspacing="0px" cellpadding="10px" style="border-color:darkslategray; width:600px; text-align:center; font-size:30px; font-style:italic;">
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
                    
                    
                    
                    <td><a onclick="return confirm('Are you sure, you want to delete?')" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                <?php
    }
}
?>
        </table></center>
