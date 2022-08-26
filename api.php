<?php
	include 'config.php';
	/**
	 * REST API FOR Subject Details
	 */
	class API {
		
		function Select() {
			$db = new db();
			$Subjects = array();
			$Query = $db->query("SELECT * FROM all_subjects where `professor`!=''");
			while ($Data = $db->fetch_array($Query)) {
				$Subjects[$Data['subjectId']] = array(
					'subjectId' => $Data['subjectId'],
					'subjectCode' => $Data['subjectCode'],
					'subjectName' => $Data['subjectName'],
					'department' => $Data['department'],
					'program' => $Data['program'],
					'regulation' => $Data['regulation'],
					'professor' => $Data['professor']
				);
			}
			return json_encode($Subjects);
		}
	}

	$API = new API;
	header('Content-Type: application/json');
	echo $API->Select();
?>