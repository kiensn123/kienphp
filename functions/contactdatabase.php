<?php 
require_once("database.php");


function contact(){
    $sql = "SELECT * FROM `contacts`";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function create_contact($first_name ,$phone_number,$created_at){
    $sql = "INSERT INTO contacts (first_name, phone_number, created_at) VALUES ('$first_name', '$phone_number', '$created_at')";

    $result = query($sql);
    // Kiểm tra kết quả
    if ($result) {
        return "Contact created successfully";
    } else {
        return "Error creating contact: " . mysqli_error($conn);
    }
   
}