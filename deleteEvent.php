<?php 
require 'dbConnect.php';


	try
	{
		$sql = "DELETE FROM wdv341_event WHERE event_id=$_GET[id]";
		//$sql = "DELETE FROM wdv341_event";
		$conn->exec($sql);
		//echo "\nRecord deleted successfully";
		session_start();
		$_SESSION['message'] = 'Record deleted successfully';
		header("Location: " . $_GET['source']);
	}
	catch(PDOException $e)
	{
		$_SESSION['message'] = 'Record deletion failed<br />' . $e->getMessage() ;
		header("Location: " . $_GET['source']);
	}
?>