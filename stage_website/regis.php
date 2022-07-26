<?php
//Get the email
$email=$_REQUEST['email'];
//$email="khpandya1181@gmail.com";
//Database connection
$mysqli = new mysqli("mars","orena_moodle_user","ChangeMe@123","orena_demo_moodle");

if ($email !== "") {
	
	// Get corresponding workemail and
	// expertname for that personalemail	
	$query = mysqli_query($mysqli, "SELECT collegename,
	fname, gender, contactnumber, tponame, tpoemail, percent1, percent2, g_degree, g_branch, g_cgpa, g_year, m_degree, m_branch, m_cgpa, m_year, 
  project_title, project_technology, domain, skills, p_location, city, st_ate, re_sume FROM registrationform WHERE email='$email'");

	$row = mysqli_fetch_array($query);

  $collegename = $row["collegename"];
  $fname = $row["fname"];
  $gender = $row["gender"];
  $contactnumber = $row["contactnumber"];
  $tponame = $row["tponame"];  
  $tpoemail= $row["tpoemail"];
  $percent1 = $row["percent1"];
  $percent2 = $row["percent2"];
  $g_degree = $row["g_degree"];
  $g_branch = $row["g_branch"];
  $g_cgpa = $row["g_cgpa"];
  $g_year = $row["g_year"];
  $m_degree = $row["m_degree"];
  $m_branch = $row["m_branch"];
  $m_cgpa = $row["m_cgpa"];
  $m_year = $row["m_year"];
  $project_title = $row["project_title"];
  $project_technology = $row["project_technology"];
  $domain = $row["domain"];
  $skills = $row["skills"];
  $p_location = $row["p_location"];
  $city = $row["city"];
  $st_ate = $row["st_ate"];
  $re_sume = $row["re_sume"];



}
// Store it in a array
$result = array("$collegename", "$fname", "$gender", "$contactnumber", "$tponame", "$tpoemail", "$percent1", "$percent2", "$g_degree", "$g_branch", "$g_cgpa", "$g_year", "$m_degree", "$m_branch", "$m_cgpa", "$m_year", "$project_title", "$project_technology", "$domain", "$skills", "$p_location", "$city", "$st_ate", "$re_sume");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>