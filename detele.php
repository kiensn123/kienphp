<?php 
require_once("functions/contactdatabase.php");
 $contact_id = $_GET['id'];
 delete($contact_id);
 header("Location: /index.php");