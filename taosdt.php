<?php
require_once("functions/contactdatabase.php");
$first_name  = $_POST["first_name"];
$phone_number = $_POST["phone_number"];
$created_at = $_POST["created_at"];

create_contact($first_name ,$phone_number,$created_at);

header("Location: /index.php");