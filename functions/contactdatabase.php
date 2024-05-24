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