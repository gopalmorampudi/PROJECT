<?php
session_start();
include "DBConnection.php";
$selectedTutor=$_REQUEST['selectedTutor'];
$selectedSubject=$_REQUEST['selectedSubject'];
$selectedDate=$_REQUEST['selectedDate'];
$selectedTime=$_REQUEST['selectedTime'];
$student_email=$_SESSION['student_email'];

$query="INSERT INTO tutor_student_classes(tutor_id,student_email,subject_id,date_selected,time_selected) values($selectedTutor,'$student_email','$selectedSubject','$selectedDate','$selectedTime')";

$result=mysql_query($query);
if($result){
	$_SESSION['flag']='success';
	header('Location: class_history.php?usertype=student&classtype=requested');
}else{
	$_SESSION['flag']='failed';
	header('Location: class_history.php?usertype=student&classtype=requested');
}

?>