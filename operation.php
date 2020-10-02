<?php

require_once('db.php');

$con=Createdb();

if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['read'])){
    getData();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    DeleteData();
}

if(isset($_POST['deleteall'])){
    Deleteall();
}

function createData(){
    $id=$_POST['id'];
    $uname=$_POST['uname'];
    $dept=$_POST['dept'];
    $year=$_POST['year'];
    $room_no=$_POST['room_no'];
  


if($id && $uname && $dept && $year && $room_no){
    $sql="INSERT INTO project_table(id,uname,dept,year,room_no)
    VALUES('$id','$uname','$dept', '$year','$room_no')";

    if(mysqli_query($GLOBALS['con'],$sql)){
        Textnode("success","record insert succesfully");
    }else{
        Textnode("error","Error");
    }

}else{
    Textnode("error","ENTER ANY VALUE");
}
}

function Textnode($class,$meg){

    $element="<h4 class='$class'>$meg</h4>";
    echo $element;
}

function getData(){
    $sql="SELECT *FROM project_table";
    $result=mysqli_query($GLOBALS['con'],$sql);

    if(mysqli_num_rows($result)>0){
        return $result;
    }
}

//update
function UpdateData(){
    $id=$_POST['id'];
    $uname=$_POST['uname'];
    $dept=$_POST['dept'];
    $room_no=$_POST['room_no'];


    if($id && $uname && $dept && $room_no){

        $sql="UPDATE project_table SET uname='$uname', dept='$dept', room_no='$room_no' where id='$id';";

        if(mysqli_query($GLOBALS['con'],$sql)){
            Textnode("success","DATA SUCCESSFULLY UPDATED");
        }else{
            Textnode("error"," NOT DATA SUCCESSFULLY UPDATED");
        }
    }else{
        Textnode("error","select your data");
    }
}

function DeleteData(){
    $id=$_POST['id'];

    $sql="DELETE FROM project_table where id='$id'";

    if(mysqli_query($GLOBALS['con'],$sql)){
        Textnode("success","DELETED SUCCESSFULLY");

    }else{
        Textnode("error","select your data");
    }

}

function Deleteall(){

    $sql= "DROP TABLE project_table";

if(mysqli_query($GLOBALS['con'],$sql)){
    Textnode("success","ALL RECORD DELETED SUCCESSFULLY");

}else{
    Textnode("error","NOT ALL RECORED DELETED SUCCESSFULLY");
}
}

















?>
<style>
    .success{
    background-color: rgb(7, 175, 80);
    padding: 1rem;
    color: white;
}
.error{
    background-color: rgba(243, 34, 34, 0.897);
    padding:1rem;
    color: white;
}
</style>