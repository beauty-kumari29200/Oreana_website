<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="asset/css/fontawesome.css">

</head>

<?php 
 $Personal_Email=$_POST['Personal_Email'];




$target_dir1 = "Consent Letter/";
$target_file1 = $target_dir1.$email.basename($_FILES["fileToUpload1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
if ($uploadOk == 0) 
{
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
  move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);
}


$target_dir = "Profile Summary/";
$target_file = $target_dir .$email. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if ($uploadOk == 0) 
{
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}


$target_dir2 = "Expert Photo/";
$target_file2 = $target_dir2 .$email. basename($_FILES["fileToUpload_2"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
if ($uploadOk == 0) 
{
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
  move_uploaded_file($_FILES["fileToUpload_2"]["tmp_name"], $target_file2);
}







$Work_Email=$_POST['Work_Email'];

$Expert_Name=$_POST['expert_name'];

$Contect_Number=$_POST['Contect_Number'];

$Whatsapp_Number=$_POST['Whatsapp_Number'];


 $Address=$_POST['Address'];


$country=$_POST['country'];


 $state=$_POST['state'];

 $City=$_POST['city'];

 $Company_Institute=$_POST['Company_Institute'];





$Domain_of_Expertise=$_POST['Domain_of_Expertise'];
for ($i=0; $i<sizeof ($Domain_of_Expertise);$i++) {  
$DOE=$Domain_of_Expertise[$i].' , '.$DOE;
} 



$Technical_skills_Technology=$_POST['Technical_skills_Technology'];
for ($i=0; $i<sizeof ($Technical_skills_Technology);$i++) {  
$TSTL=$Technical_skills_Technology[$i].' , '.$TSTL;
}  


$Technical_Skills_Operating_System=$_POST['Operating_System'];
for ($i=0; $i<sizeof ($Technical_Skills_Operating_System);$i++) {  
$TSOP=$Technical_Skills_Operating_System[$i].' , '.$TSOP;
}

$Technical_Skills_Tools=$_POST['Technical_Skills_Tools'];


for ($i=0; $i<sizeof ($Technical_Skills_Tools);$i++) {  
$TST=$Technical_Skills_Tools[$i].' , '.$TST;
}  


$Technical_skills_Hardware=$_POST['Technical_skills_Hardware'];
for ($i=0; $i<sizeof($Technical_skills_Hardware);$i++) {  
$TSH=$Technical_skills_Hardware[$i].' , '.$TSH;
} 


$Non_Technical_skills=$_POST['chkl'];

for ($i=0; $i<sizeof ($Non_Technical_skills);$i++) {  
$MNTS=$Non_Technical_skills[$i].'AND '.$MNTS;
} 


$Mention_Non_Technical_skills=$_POST['Mention_Non_Technical_skills'];

$Date=date("d/m/Y");





 $Expert_Association_As=$_POST['Expert_Association_As'];

 $mode_of=$_POST['mode_of'];




 $Days=$_POST['Days'];
for ($i=0; $i<sizeof ($Days);$i++) {  
$T_Days=$Days[$i].', '.$T_Days;
}  




 $Time1=$_POST['Time1'];
for ($i=0; $i<sizeof ($Time1);$i++) {  
$FTime=$Time1[$i].', '.$FTime;
}  



 $Time2=$_POST['Time2'];
for ($i=0; $i<sizeof ($Time2);$i++) {  
$LTime=$Time2[$i].', '.$LTime;
}  




 $Expected_Fees_Per_Hour=$_POST['Expected_Fees_Per_Hour'];

 $Account_Name=$_POST['Account_Name'];

 $Bank_Name=$_POST['Bank_Name'];

 $Account_Number=$_POST['Account_Number'];


 $IFSC_COde=$_POST['IFSC_COde'];

 $flexRadioDefault=$_POST['flexRadioDefault'];






include 'connection_moodle.php';

$sql = "Select * from `expert` where Personal_Email='$Personal_Email'";
    $result = mysqli_query($mysqli,$sql);
    $num = mysqli_num_rows($result);
    if ($num > 0)	
            { 
                echo"";
                ?>
                <div class="alert alert-danger" role="alert">
                  Email is already registered :<?php echo $Personal_Email; ?>
                </div>
                <?php
               
            } 
        else
            {
                
                 $user=mysqli_query($mysqli,"INSERT INTO `expert`(`Date`,`Expert_Name`, `Personal_Email`, `Work Email`, `Contect Number`, `Whatsapp Number`, `Address`, `Country`, `State`, `City`, `Company/Institute Name`, `Domain of Expertise`, `Technical Skills(Technology)`, `Technical Skills(Operating System)`, `Technical Skills(Tools)`, `Technical Skills(Hardware)`, `Non-Technical Skills`, `Mention other Non-Technical skills`, `Expert Association As`, `Mode`, `Days`, `Start Time`, `End Time`, `Expected Fees Per Hour`, `Consent Latter`, `Expert Photo`, `Profile Summary`, `Name/Account Holder Name(To Be Printed On Cheque)`, `Bank Name`, `Account Name`, `IFSC Code`,`Display Data ON Website`) VALUES ('$Date','$Expert_Name','$Personal_Email','$Work_Email','$Contect_Number','$Whatsapp_Number','$Address','$country','$state','$City','$Company_Institute','$DOE','$TSTL','$TSOP','$TST','$TSH','$MNTS','$Mention_Non_Technical_skills','$Expert_Association_As','$mode_of','$T_Days','$FTime','$LTime','$Expected_Fees_Per_Hour','$target_file1','$target_file2','$target_file','$Account_Name','$Bank_Name','$Account_Number','$IFSC_COde','$flexRadioDefault')");
				 
				 
				 
				 
				 header("Location:https://orena.solutions/new/thank you.html");
            }
			


?>


