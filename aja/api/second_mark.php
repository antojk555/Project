<?php
include 'connection.php';

$data_list = array();

 
$query=mysqli_query($con,"SELECT * FROM `student_db` where `year`=2");



if(mysqli_num_rows($query) > 0)
{
	while($real= mysqli_fetch_assoc($query))
	{

		$data_list[] = $real;
	}	

	$response['success'] =1; 
	$response['result'] = $data_list;
    
	echo json_encode($response);
}
else
{
	$response['success'] =0; 
	$response['result'] = "No data found!";
    
	echo json_encode($response);
}

?>

