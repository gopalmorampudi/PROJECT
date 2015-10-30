<?php
session_start();
include "DBConnection.php";
class MainClass{
	public $subjectArray;
	
	 function __construct() {
		$this->subjectArray=$this->getSubjects();
   }
   
	public function getSubjects(){
		global $subjectArray;
		$megaContainer=array();
		$tutor_email=$_SESSION['tutor_email'];
			$sql="select subject from tutor where emailid='$tutor_email'";
			$result=mysql_query($sql);
			if($res=mysql_fetch_row($result)){
			$nestedSql='select subject_id,subject_name from subject where subject_id in('.$res[0].')';
					$nestedRes=mysql_query($nestedSql);
					while($result1=mysql_fetch_array($nestedRes)){
						$minContainer=array();
						array_push($minContainer,$result1[0]);
						array_push($minContainer,$result1[1]);
						array_push($megaContainer,$minContainer);
					}
				}
		return $megaContainer;
	}
	public function getSubjectName($subjectId){
		global $subjectArray;
		$subjectName='';
		foreach($this->subjectArray as $a){
			if($a[0]==$subjectId){
				$subjectName.=$a[1];
				break;
			}
		}
		return $subjectName;
	}
	
	public function setSchedule($dataArray){
		$status='';
		$user=$_SESSION['tutor_id'];
		$query="INSERT INTO tutor_schedule(tutor_id,c1_8AM,c2_9AM,c3_10AM,c4_11AM,c5_12AM,c6_1PM,c7_2PM,c8_3PM,c9_4PM,c10_5PM,weekdays) 
		values";
		$query2="update tutor set status='available' where tutor_id='$user'";
		
		$weekdays=array('Monday','tuesday','Wednesday','Thursday','Friday','Saturday');
		for($i=0;$i<sizeof($dataArray);$i++){
			 $query.="('$user',";
			 for($j=0;$j<sizeof($dataArray[$i]);$j++){
				$data=$dataArray[$i][$j];
				if($data=='null'){
					$query.="null,";
				}else{
					$query.="'$data',";
				}
			 }
			 if($i==sizeof($dataArray)-1)
				$query.="'$weekdays[$i]');";
			else
				$query.="'$weekdays[$i]'),";
		}
			 $result=mysql_query($query);
			 $result2=mysql_query($query2);
			if($result && $result2){
				$status.='success';
			}else{
				$status.='failed';
			}
			return $status;
		}
		public function getAllSubject(){
			$subjectArray=array();
			$query="select subject_id,subject_name from subject";
			 $result=mysql_query($query);
			 while($res=mysql_fetch_array($result)){
				 $miniArray=array();
				 array_push($miniArray,$res[0]);
				 array_push($miniArray,$res[1]);
				 array_push($subjectArray,$miniArray);
			 }
			 return $subjectArray;
		}
		public function isScheduled($tutorId){
			$status='';
			$query="select status from tutor where tutor_id=$tutorId";
			$result=mysql_query($query);
			if($res=mysql_fetch_row($result)){
				if($res[0]=='Accept'){
					$status.='yes';
				}else{
					$status.='no';
				}
			}
			return $status;
		}
}

 ?>

