<?php
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $sql = "INSERT INTO 'login'  ('email','contact')
  VALUES('$email','$contact')";

$result = $conn->query($sql);

if($result == TRUE){
  echo"New Record Inserted";
}else{
  echo "error:" .$sql. "<br>" .$conn->error;
}
$conn->close();

}
  ?>