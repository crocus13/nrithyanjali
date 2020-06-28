<?php
$db = new SQLite3('/Users/browse/Sites/danceschool/danceschool.db');

$html_str = "";

$html_str .= "<!DOCTYPE html>;<html><body><table align=\"center\" border=\"1px\" style=\"width:100%\">";
$html_str .=  "<tr><th colspan=\"5\"> <h2>Student Record</h2></th></tr>";
$html_str .=  "<tr><th>Firstname</th>";
$html_str .=  "<th>Lastname</th>";
$html_str .=  "<th>DoB</th>";
$html_str .=  "<th>Phone</th>";
$html_str .=  "<th>Email</th></tr>";

$result = $db->query("SELECT * from contact_details");
while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
$html_str .=  "<tr>";
$html_str .=  "<td>" . $row['fname'] . "</td>";
$html_str .=  "<td>" . $row['lname'] . "</td>";
$html_str .=  "<td>" . $row['dob'] . "</td>";
$html_str .=  "<td>" . $row['contactno'] . "</td>";
$html_str .=  "<td>" . $row['email'] . "</td>";
$html_str .=  "</tr>";
}

$db->close();
$html_str .=  "</table>";
$html_str .=  "</body>";
$html_str .=  "</html>";


echo $html_str;
?>