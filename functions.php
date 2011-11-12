<?php

function get_results($query){

	global $con;

	

	if($query == ""){
		
		echo "";

	}else{

		$res = @odbc_exec($con,$query);

		if($res){ 
			odbc_result_all($res);
		}else{
	
			echo odbc_errormsg($con);
		}

	}

	

}
