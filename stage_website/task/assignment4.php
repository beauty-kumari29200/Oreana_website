<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 4</title>
    <style>
        .reg
        {
            border-style:solid;
            width: 500px;
            margin:500px;
            Background-color:skyblue;
    
        }
        .name1 input
        { 
            margin-left:10px;
        }
        .name1
        {
            margin:5px;
        }

        .name2 input
        { 
            margin-left:12px;
        }
        .name2
        {
            margin:5px;
        }
        .mobile input
        { 
            margin-left:12px;
        }
        .mobile
        {
            margin:5px;
        }
        .Roll input
        { 
            margin-left:27px;
        }
        .Roll
        {
            margin:5px;
        }
        .add input
        { 
            margin-left:23px;
        }
        .add
        {
            margin:5px;
        }
        .city input
        { 
            margin-left:13px;
        }
        .city
        {
            margin:5px;
        }
        .area input
        { 
            margin-left:20px;
        }
        .area
        {
            margin:5px;
        }
        .state input
        { 
            margin-left:10px;
        }
        .state
        {
            margin:5px;
        }
        .qua input
        { 
            margin-left:27px;
        }
        .qua
        {
            margin:5px;
        }
        .spe input
        { 
            margin-left:20px;
        }
        .spe
        {
            margin:5px;
        }
        .email input
        { 
            margin-left:27px;
        }
        .email
        {
            margin:5px;
        }
        .date input
        { 
            margin-left:30px;
        }
        .date
        {
            margin:5px;
        }
        .bonus input
        { 
            margin-left:22px;
        }
        .bonus
        {
            margin:5px;
        }
        .ele input
        { 
            margin-left:27px;
        }
        .ele
        {
            margin:5px;
        }
        .gend input
        { 
            margin-left:27px;
        }
        .gend
        {
            margin:5px;
        }  
         .pass input
        { 
            margin-left:27px;
        }
        .pass
        {
            margin:5px;
        }
        .sub input
        { 
            margin-left:27px;
        }
        .sub
        {
            margin:5px;
        }
 </style>
</head>


<body>
    <form class="reg"  action="db1.php" method="post">
    <div class="name1"  >
        <h1>Register form</h2>
        First  Name: <input type="text" name="name">

    </div>
    <br>
    <div class="name2">
        Last name: <input type="text" name="name1">
</div>
<br>
<div class="mobile">
    Mobile no: <input type="text" name="mobileno">
</div>
        <br>
        <div class="Roll">
        Roll no: <input type="text" name="roll">

    </div>
    <br>
    <div class="add">
        Address: <input type="text" name="address">
    </div>
    <br>
    <div class="city">
         City name: <input type="text" name= "cityname">
</div>
<br>
<div class="area">
    Area pin: <input type="text" name="area">
</div>
<br>
<div class="state">
    State name: <input type="text" name="state">
</div>
<br>
<div class="qua">
    qualifications:
    <select name="position">
        <option>B.E</option>
        <option>B.Tech</option>
        <option>M.E</option>
        <option>P.hd</option>
</select>
</div>

<br>
<div class="spe">
    Specilzation:
    <input type="checkbox" name="Speclization1">information Technology<br>
    <input type="checkbox" name="Speclization1">computer science<br>
    <input type="checkbox" name="Speclization1">Analize data<br>
</div>
<br>
    <div class="email">
        Email: <input type="text" name="email">
    </div>
    <br>
    <div class="date">
        Date: <input type="date" name="date">
    </div>
    <br>
    <div class="bonus">
        Bonus: <input type="=number" name="bonus">
    </div>
    <br>
    
    <div class="ele">
         Are you eligible?: <input type="checkbox" name="myeligibility">
    </div>
    <br>
    <div class="gend">
        Gender:  Male <input type="radio" name="mygender"> Female <input type="radio" name="mygender">

    </div>
    <br>
    <div class="pass">
        Password: <input type="number" name="password">
</div>
<br>
            <button type="submit" name="submit">submit</button>
        

   
    </div>
    </form>
    
</body>
</html>