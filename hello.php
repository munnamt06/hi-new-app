<?php

echo "Munna";

$con = mysqli_connect("localhost","if0_37932748","GjzRVJ1JbkRk7vP","if0_37932748_my_database");

if(mysqli_connect_errno()){
	echo "Couldn connect to Database !<br>" .mysqli_connect_errno();
}
else
	echo "Munna";

?>
