<?php

  	$this->load->view("include/_header.php");
	
	$this->load->view("include/_navbar.php");

	$this->load->view($template);

	$this->load->view("include/_footer.php");