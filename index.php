<?php
require_once('operation.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    .edit{
    color:black;
    padding-left: 10px;
}
.edit:hover{
    background-color:green;
}
</style>
<body>
<main>
<div class="container">
<h1 class="heading">DATABASE MAINTANCE</h1>
    <div class="d-flex">
        <form action="" method="post">
        <label>id: </label>
        <input type="text" name="id" class="id"placeholder="id"><br><br>
        <label>name: </label>
        <input type="text" name="uname" class="id" placeholder="name"><br><br>
        <label>dept: </label>
        <input type="text" name="dept" class="id" placeholder="dept"><br><br>
        <label>year: </label>
        <input type="text" name="year" class="id" placeholder="year"><br><br>
        <label>room_no: </label>
        <input type="text" name="room_no" class="id" placeholder="room_no"><br><br>

        
        <input type="submit" name='create' class="create" value="create">
        <input type="submit" name="read" class="read" value="view">
        <input type="submit" name="update" class="update" value="update">
        <input type="submit" name="delete" class="delete" value="delete">
        <input type="submit" name="deleteall" class="deleteall" value="deleteall">
        </form>
    </div>
    <div class="table_heading">
        <table border="1px">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DEPT</th>
            <th>YEAR</th>
            <th>ROOM_no</th>
            <th>EDIT</th>
        </tr>
        <tbody id='items'>
        <?php

            if(isset($_POST['read'])){
                $result=getData();

                if($result){
                while($row=mysqli_fetch_assoc($result)){?>
                    
                    <tr>
                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id'];?></td>
                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['uname'];?></td>
                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['dept'];?></td>
                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['year'];?></td>
                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['room_no'];?></td>
                        <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id'];?>"></i></td>
                    </tr>
              
                    <?php
                    }
                }
            }


        ?>
</tbody>
</table>
</div>

</div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="main.js"></script>
</body>
</html>

<?php
