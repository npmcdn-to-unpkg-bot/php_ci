<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sla extends CI_Controller {


	function get(){

		   // 43200 minutos em 30 dias


		   $site = $this->uri->segment(3);
		   ini_set("default_socket_timeout","05");
		   set_time_limit(5);
		   $f=@fopen("http://".$site,"r");
		   $r=@fread($f,1000);
		   @fclose($f);
		   if(strlen($r)>1) {
		     $lines = file ('newfile.txt');
				$count = 0;
				// Percorre o array, mostrando o fonte HTML com numeração de linhas.
				foreach ($lines as $line_num => $line) {
				    //echo "Linha #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br>\n";
				    $count++;
				}

				$sla_mensal = 100 - ( ($count*100) / 43200);
				$sla_semestral = 100 - ( ($count*100) / 259200);
				$sla_anual = 100 - ( ($count*100) / 518400);
				//$sla = 
				//$sla = gmp_div_r($count, 43200); 
				
		     echo("
		            <h2>Servidor $site</h2>
		            <p>OnLine</p>
		            <p>Total de SLA Mensal -> $sla_mensal %</p>
		            <p>Total de SLA Semestral -> $sla_semestral %</p>
		            <p>Total de SLA Anual -> $sla_anual %</p>
		            ");
		   }
		   else {

		   		$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
				$txt = date("m")."-".date("h:i")." - $site \n";
				fwrite($myfile, $txt);
				fclose($myfile);

				$lines = file ('newfile.txt');
				$count = 0;
				// Percorre o array, mostrando o fonte HTML com numeração de linhas.
				foreach ($lines as $line_num => $line) {
				    echo "Linha #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br>\n";
				    $count++;
				}

				$sla_mensal = 100 - ( ($count*100) / 43200);
				$sla_semestral = 100 - ( ($count*100) / 259200);
				$sla_anual = 100 - ( ($count*100) / 518400);
				//$sla = 
				//$sla = gmp_div_r($count, 43200); 
				
		     echo("
		            <h2>Servidor $site</h2>
		            <p>Off-line</p>
		            <p>Total de SLA Mensal -> $sla_mensal %</p>
		            <p>Total de SLA Semestral -> $sla_semestral %</p>
		            <p>Total de SLA Anual -> $sla_anual %</p>
		            ");
		   }
	}

}

/* End of file equipamento.php */
/* Location: ./application/controllers/equipamento.php */