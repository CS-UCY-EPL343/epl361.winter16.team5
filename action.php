<html>
<body>

<?php


	echo "Email: "; if(empty($_POST['email']))
						 echo "N/A";
					else  
						echo $_POST['email'];
					echo nl2br("\n");
	echo "Name: "; if(empty($_POST['name']))
						echo "N/A";
					else
						echo $_POST['name'];
					echo nl2br("\n");
	echo "Surname: "; if(empty($_POST['surname']))
						 echo "N/A";
					  else
					  	 echo $_POST['surname'];
					  echo nl2br("\n");
	echo "Age: "; if(empty($_POST['date']))
						echo "N/A";
				  else{
				  		$from = new DateTime($_POST['date']);
				  		$to = new DateTime('today');
				  		echo $from->diff($to)->y; 
				  } echo nl2br("\n");
	echo "Gender: ";	$var = isset($_POST['gender'])? $_POST['gender']:'N/A' ; echo $var; echo nl2br("\n");
	echo "URL: "; $var = isset($_POST['url'])? $_POST['url']: "N/A"; echo $var; echo nl2br("\n");
	echo "Platform Name: "; $var = isset($_POST['VoIP1']) ? $_POST['VoIP']: 'N/A'; echo $var; echo nl2br("\n");
	echo "Report Type: ";	echo $_POST['ReportType']; echo nl2br("\n");
	echo "Details: "; $var = empty($_POST['Details'])? "N/A": $_POST['Details']; echo $var;



 ?>

</body>
</html>