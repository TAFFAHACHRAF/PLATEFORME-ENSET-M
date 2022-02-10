<?php
	$conex=new mysqli("localhost","root","","system_scolaire");
	if ($conex->connect_error) {
            die("Connection failed: " . $conex->connect_error);
        } 
?>