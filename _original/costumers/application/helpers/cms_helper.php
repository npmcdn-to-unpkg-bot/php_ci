<?php

function btn_edit ($uri)
{
	return anchor($uri, '<i class="glyphicon glyphicon-edit"></i>');
}

function btn_delete ($uri)
{
	return anchor($uri, '<i class="glyphicon glyphicon-remove-sign"></i>', array(
		'onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
	));
}

function badge($servico)
{
	$var = "<span class=\"badge\">$servico</span>";
	return $var;
}

function mysql_to_date($data)
{
	if ($data != NULL){
		$arraio = array();
		$arraio[0] = explode('-', $data);
		$data_formatada = $arraio[0][2]."/".$arraio[0][1]."/".$arraio[0][0];
		return $data_formatada;
	}else{
		return $data;
	}
}

function status_servidor($link,$nome,$icon){
     ini_set("default_socket_timeout","05");
     set_time_limit(5);
     $f=@fopen("$link","r");
     $r=@fread($f,1000);
     @fclose($f);
     if(strlen($r)>1) {
       return ("<p><b>$nome:&nbsp;&nbsp;</b><i class=\"fa $icon\" style=\"color:#92CE92\"></i>&nbsp;<a style=\"text-decoration:none;\" href=\"$link\" target=\"_brank\">(Online)</a></p>");
     }
     else {
       return ("<p><b>$nome:&nbsp;&nbsp;</b><i class=\"fa $icon\" style=\"color:red\"></i>&nbsp;(Off-line)</p>");
     }
}