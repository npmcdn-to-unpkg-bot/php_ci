<?php

  	$this->load->view("include/_header.php");
	
	$this->load->view("include/_nav_default.php");

	echo "<div class=\"container-fluid\">";
	$this->load->view($template);
	echo "</div>";
	
	$this->load->view("include/_footer.php");