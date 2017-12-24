<?php
	if(isset($_POST['submit'])){
		mail("isaacaddis21@gmail.com","TEDx Inquiry From"+$_POST['email'],$_POST['name']+" would like to be a "+$_POST['role']+". Email back at: "+$_POST['email']);
	}
	if(isset($_POST['action'])){
		mail("isaacaddis21@gmail.com","TEDx Inquiry From"+$_POST['mail'],$POST['text']);
	}
?>