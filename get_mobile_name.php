<?php
$link = mysqli_connect("localhost", "root", "", "mobile");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Get search term
$searchTerm = $_GET['term'];
//$searchTerm = 'p';
// Get matched data from skills table
$query = $link->query("SELECT * FROM product WHERE mobile_name LIKE '%".$searchTerm."%' ORDER BY mobile_name ASC");

// Generate skills data array
$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $data['id'] = $row['id'];
        $data['value'] = $row['mobile_name'];
        array_push($skillData, $data);
    }
}


echo json_encode($skillData);


?>


