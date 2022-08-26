<?php
include "config.php";
ini_set('memory_limit', '-1');
$con2 = mysqli_connect("172.7.67.105","root","Adminroot@1112", "codemind");




$query = $db->query("SELECT college,branch,passout_year from db_coding_counts where college!='' and branch!='' and passout_year!='' group by college,branch,passout_year");
while ($Fetch = $db->fetch_array($query)) {
	$TableName = strtoupper($Fetch['college']).'_'.strtoupper(str_replace(array('&',' '), array("_",''), $Fetch['branch'])).'_'.$Fetch['passout_year'];
	// echo "<br>";

	// $DeleteTable = mysqli_query($con2, "DROP TABLE $TableName");
	$CreateTable = mysqli_query($con2, "CREATE TABLE `$TableName` AS SELECT * FROM submissions_view");
	// if (!$CreateTable) {
	// 	echo "Failed - ".$TableName;
	// 	echo "<br>";
	// }else{
	// 	echo "Success - ".$TableName;
	// 	echo "<br>";
	// }
}



$x=1;
$query = $db->query("SELECT * FROM db_coding_counts where college!='' and branch!='' and passout_year!=''" );
$Records = $db->num_rows($query);

$LoopTimes = ceil($Records/5000);
for ($i=0; $i < $LoopTimes; $i++) {
	$Start = $i*5000;

	$query = $db->query("SELECT * FROM db_coding_counts where college!='' and branch!='' and passout_year!='' LIMIT $Start,5000" );
	while ($Fetch = $db->fetch_array($query)) {
		$TableName = strtoupper($Fetch['college']).'_'.strtoupper(str_replace(array('&',' '), array("_",''), $Fetch['branch'])).'_'.$Fetch['passout_year'];
		if($Select = mysqli_query($con2, "SELECT * FROM $TableName WHERE record_id='$Fetch[id]'")) {
			$Count = mysqli_num_rows($Select);	
			if ($Count==0) {
				$Insert = mysqli_query($con2, 'INSERT INTO '.$TableName.' SET record_id="'.$Fetch['id'].'", pid="'.$Fetch['pid'].'", userid="'.$Fetch['userid'].'", roll_number="'.$Fetch['roll_number'].'", name="'.$Fetch['name'].'", college="'.$Fetch['college'].'", branch="'.$Fetch['branch'].'", passout_year="'.$Fetch['passout_year'].'", section="'.$Fetch['section'].'", last_login="'.$Fetch['last_login'].'", github="'.$Fetch['github'].'", hackerRank="'.$Fetch['hackerRank'].'", course="'.$Fetch['course'].'", topic="'.$Fetch['topic'].'", level="'.$Fetch['level'].'", total_marks="'.$Fetch['total_marks'].'", code="'.mysqli_real_escape_string($con2, $Fetch['code']).'", output="'.$Fetch['output'].'", testcases="'.$Fetch['testcases'].'", marks="'.$Fetch['marks'].'", status="'.$Fetch['status'].'", date="'.$Fetch['date'].'", course_name="'.$Fetch['course_name'].'", course_tags="'.$Fetch['course_tags'].'", topic_name="'.$Fetch['topic_name'].'", topic_tags="'.$Fetch['topic_tags'].'", problemName="'.$Fetch['problemName'].'", time="'.$Fetch['time'].'"');
				if ($Insert) {
					echo $x."-Success";
				}else{
					echo $x."-Failed";
				}
				echo "<br>";
			}

			$x++;
		} else {
			echo "SELECT * FROM $TableName WHERE record_id='$Fetch[id]'";
			echo "failed <br>";
			exit();
		}
		

	}
}

?>