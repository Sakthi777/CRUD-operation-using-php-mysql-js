<?php

function Createdb(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname='project';



//crete connection
$con=mysqli_connect($servername,$username,$password);

//check connection
if(!$con){
    die("connetion failed".mysqli_connect_error());
}

//create database
$sql=" CREATE DATABASE IF NOT EXISTS $dbname";

if(mysqli_query($con,$sql)){
    $con=mysqli_connect($servername,$username,$password,$dbname);

    $sql="CREATE TABLE IF NOT EXISTS rvscas(
            id VARCHAR(11)NOT NULL PRIMARY KEY,
            uname VARCHAR(30),
            dept VARCHAR(20),
            year VARCHAR(20),
            room_no VARCHAR(10)
        );
    ";

        if(mysqli_query($con,$sql)){
            return $con;
        }else{
            echo "error table creation";
        }


}else{
    echo"error database".mysqli_error($con);
}
}


?>