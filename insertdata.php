<?php require_once('connection/connection.php'); ?>



 <!DOCTYPE html>

 <html>

 <head>

 	<title></title>

 </head>

  <body>



<?php



	
		$sensor1 = mysqli_real_escape_string($connection,$_GET['sensor1']);

		$sensor1 = mysqli_real_escape_string($connection,$_GET['sensor2']);

		$sensor1 = mysqli_real_escape_string($connection,$_GET['sensor3']);

		$query = "insert into data values ({$sensor1},{$sensor2},{$sensor})";

		$result_set = mysqli_query($connection,$query);


?>



</body>

</html>



<?php mysqli_close($connection); ?>