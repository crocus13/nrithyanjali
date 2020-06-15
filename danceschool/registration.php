<?php
$fname=$_POST["fname"];
echo "fname: " . $fname;
echo "<br>";
$lname = $_POST["lname"];
echo " lname: " . $lname;
echo "<br>";
$dob = $_POST["dob"];
echo " dob:".$dob;
echo "<br>";
$contactno = $_POST["contactno"];
echo "contactno: " . $contactno;
echo "<br>";
$email = htmlspecialchars($_POST["email"]);
echo " email:" . $email;



#echo "INSERT INTO contact_details (fname, lname, dob, contactno, email) VALUES ($fname, $lname, $dob, $contactno, $email)";

$db = new SQLite3('/Users/browse/Sites/danceschool/danceschool.db');
$db->exec("INSERT INTO contact_details (fname, lname, dob, contactno, email) VALUES ('$fname', '$lname', '$dob', $contactno, '$email')");   

?>