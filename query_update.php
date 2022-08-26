<?php
include "config.php";
$sql = "SHOW COLUMNS FROM `asp_staff_details`";
$result = $db->query($sql);
while($row = $db->fetch_array($result)){
    // echo $row['Field']."<br>";
    $updateQuery = $db->query("UPDATE `asp_staff_details` SET `".$row['Field']."` = REPLACE(`".$row['Field']."`, '?', '')");
    // echo "<br/>";
}
?>