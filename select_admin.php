<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
try {
  $conn = new PDO("mysql:host=cig4l2op6r0fxymw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=ppg1bdg8coul7ed1","kpxp96k9j2q1anmp","er6s0s73za50ig2e");
}
catch (PDOExpection $e) {
    echo "Error" . $e->getMessage();
}
$query = "SELECT * FROM admin";
$result = $conn->query($query);
if($result){
  $admin = $result->fetchAll();
  if(!empty($admin)){
    /*echo json_encode(array(
    "petID"=>$pets[0]["petID"],
    "petName"=>$pets[0]["petName"],
    "petPhotos"=>$pets[0]["petPhotos"],
    "petSpecies"=>$pets[0]["petSpecies"],
    "petDOB"=>$pets[0]["petDOB"],
    "petGender"=>$pets[0]["petGender"];
    
    ))*/
   echo json_encode($admin);
    //echo "<img src='assets/img/{$row["petPhotos"]}'"/>;
  } else {
    echo json_encode(false);
  }
} else {
  echo json_encode(false);
} 

?>