<?php
$dbHost="localhost";
$dbuser="root";
$dbpass="";
$dbname="testdatabase";
$conn= mysqli_connect($dbHost,$dbuser,$dbpass,$dbname);
if ($conn){
    echo "success<br>";
}
else{
    die("Database connection failed");
}
$sql="CREATE TABLE Reminder (sno INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY, Remindername VARCHAR(50) NOT NULL, Remindersubject VARCHAR(50) NOT NULL,ReminderDescription VARCHAR(50) NOT NULL,EmailAddress VARCHAR(50) NOT NULL,Contactno Int(11)NOT NULL,smsno Int(20)NOT NULL ,Status VARCHAR(50) NOT NULL , Recurrence Frequency VARCHAR(70) NOT NULL)";
$result=mysqli_query($conn,$sql);
if($result){
    echo "the table is created successfully<br>";
}
else{
    echo "the table is not created successfully <br>".mysqli_error($conn);
}
?>