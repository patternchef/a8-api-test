<?php
//api.php

if(isset($_REQUEST['cat']))
{
	switch($_REQUEST['cat'])
	{
		case "gundams_name":
			include('data/gundams_name.js');
			break;
		default:
			include('data/gundams_year.js');
	}
}else{

	echo "No parameter sent";

}
