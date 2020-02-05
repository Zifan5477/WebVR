<?php
$name = $_FILES["file"]["name"];
//echo $name;
$register = "FXsqTqaGNSZER5dSETEm+VzQEh9sWSa5DZMFsSmMxYV9GcXs8W3R8A//mWXrGNUceXvrihmh28hfRF1ivrW0HMzEychPvNiD8B//4//ZzDaUE9Rh6Ig22aKJGDbja1//kYIqmc//VKfItRE2RTSOIbIroxOtsz626NIpxWksAAifwhpNwuPXqDQpz2sRUMBzoPqZktpkItoSenN2mKd8Klfx7pOuB6CIK3e1CDXgyndqOt2mWybLZcU//wfJVAecfxk15ghiqrzaDsbqrdABDowg=="; 
$string = "F:\\final_year_project\\krpano\\krpano-1.19-pr8\\krpanotools64.exe makepano -config=templates\\vtour-normal.config F:\\phpstudy\\WWW\\upload\\".$name."\\".$name;
$command = "F:\\final_year_project\\krpano\\krpano-1.19-pr8\\krpanotools64.exe register".$register;
exec($command,$output,$return);
if ($return == 1){
	echo "register error !";
}
else{
	exec($string,$out,$return_val);
//F:\\phpstudy\\PHPTutorial\\WWW\\upload\\
		if ($return_val == 1){
			echo "error !";
		}
		else {
			echo"<script>alert('generate successfully!');history.go(-1);</script>"; 
		}
}

?>