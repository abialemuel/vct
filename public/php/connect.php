<?php
function dml($query)
{
	$con = mysqli_connect('localhost','root','','vintagecar');
	mysqli_query($con, $query);
	}

function query($sql)
{
	$con = mysqli_connect('localhost','root','','vintagecar');
	$query = mysqli_query($con,$sql);

	return $query;
	}
?>
