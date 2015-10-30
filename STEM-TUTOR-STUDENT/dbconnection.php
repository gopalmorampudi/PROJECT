<?php
   $dbconn=mysql_connect("localhost","root","");
   if($dbconn)
   {
   	mysql_select_db('tution');
   }
   else
   {
   	echo "Database not connected";
   }
?>