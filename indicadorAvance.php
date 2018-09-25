<?php
require_once('config.php');

$id = $_POST['id'];
//$id = '1';

$data=array();
mysqli_set_charset($connect,"utf8");
$query = "SELECT * FROM advances WHERE indicator_id = '$id'";   
$result = mysqli_query($connect, $query); 
while ($row=mysqli_fetch_array($result))
{
	$data[] = $row;
}
echo json_encode($data);

