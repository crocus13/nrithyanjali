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
echo " email:" . $email ;
echo "<br>";

$skilllevel = $_POST['skilllevel'];  // Storing Selected Value In Variable
echo "You have selected :" .$skilllevel;  // Displaying Selected Value
echo"<br>";

$comments = htmlspecialchars($_POST["comments"]);
echo " comments:" . $comments ;






#echo "INSERT INTO contact_details (fname, lname, dob, contactno, email) VALUES ($fname, $lname, $dob, $contactno, $email)";
//db down temperory commented
$db = new SQLite3('/Users/browse/Sites/danceschool/danceschool.db');
$db->exec("INSERT INTO contact_details (fname, lname, dob, contactno, email,skilllevel,comments) VALUES ('$fname', '$lname', '$dob', '$contactno', '$email','$skilllevel','$comments')");  










/*
    $beginner_level = 'unchecked';
    $intermediate_level = 'unchecked';
    $senior_level="senior";

 if (isset($_POST['Submit'])) 
    {
         $selected_radio = $_POST[''];

         if ($selected_radio == 'beginner') 
             {
                $beginner_level = 'checked';
             }
          elseif ($selected_radio == 'intermediate') 
          {
                $intermediate_level = 'checked';
          }
          else 
          {
                $senior_level = 'checked';
          }
    }*/






?>