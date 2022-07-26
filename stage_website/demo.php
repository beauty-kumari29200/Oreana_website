<?php
//Get the personalemail
$personalemail=$_REQUEST['personalemail'];
//$personalemail="khpandya1181@gmail.com";
//Database connection
$con = new mysqli("mars", "orena_moodle_user", "ChangeMe@123", "orena_demo_moodle");

if ($personalemail !== "") {
	
	// Get corresponding workemail and
	// expertname for that personalemail	
	$query = mysqli_query($con, "SELECT workemail,
	expertname, contactnumber, whatsappnumber, add_ress, country, st_ate, city, companyname, domainofexpertise, technology, operatingsystem, tools, hardware, mode, expectedfeesperhour, accountholdername, bankname, accountnumber, IFSCcode, displayyourcollaboration FROM expertdemo WHERE personalemail='$personalemail'");

	$row = mysqli_fetch_array($query);

  $workemail = $row["workemail"];
  $expertname = $row["expertname"];
  $contactnumber = $row["contactnumber"];
  $whatsappnumber = $row["whatsappnumber"];  
  $add_ress = $row["add_ress"];
  $country = $row["country"];
  $st_ate = $row["st_ate"];
  $city = $row["city"];
  $companyname = $row["companyname"];
  $domainofexpertise = $row["domainofexpertise"];
  $technology = $row["technology"];
  $operatingsystem = $row["operatingsystem"];
  $tools = $row["tools"];
  $hardware = $row["hardware"];
  $mode = $row["mode"];
  $expectedfeesperhour = $row["expectedfeesperhour"];
  $accountholdername = $row["accountholdername"];
  $bankname = $row["bankname"];
  $accountnumber = $row["accountnumber"];
  $IFSCcode = $row["IFSCcode"];
  $displayyourcollaboration = $row["displayyourcollaboration"];



}
// Store it in a array
$result = array("$workemail", "$expertname", "$contactnumber", "$whatsappnumber", "$add_ress", "$country", "$st_ate", "$city", "$companyname", "$domainofexpertise", "$technology", "$operatingsystem", "$tools", "$hardware", "$mode", "$expectedfeesperhour", "$accountholdername",  "$bankname", "$accountnumber" ,"$IFSCcode", "$displayyourcollaboration" );

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>