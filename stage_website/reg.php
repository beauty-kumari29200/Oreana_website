<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
     <link rel="stylesheet" href="font.css">
	
	<style type="text/css">
		 body
        {
           
            background-image: url(img/reg.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family:  Regular;
            margin: 0;
            padding: 0;

        }
         .regbox
        {
            margin-left:400px;
            margin-top: 20px;
            color: white;
            width: 500px;
            height:648px;
            background-color: black;
            opacity: 0.9;
            

        }
       
         h1
        {
            text-align:center;
            color:white;
            margin:8px;

        }
          input[type=text]
        {
            margin:9px;
            width:150px;
            height:35px;
            transition-duration: 0.5s;
            border-radius:6px;

        }
        input[type=email]
        {
            margin:19px;
            width:150px;
            height:35px;
            transition-duration: 0.5s;
            border-radius:6px;
        }
         textarea
        {
        	 margin-left:92px;
        	 margin-top: 8px;
            width:150px;
            height:35px;
            transition-duration: 0.5s;
            border-radius:6px;
        }
 	     /* textarea:hover
         {
           transform: scale(1.4);
           border-color: blue;
         }
          input[type=text]:hover
         {
           transform: scale(1.2);
           transition-duration: 0.7s;
           border-color: blue;
       }
        input[type=email]:hover
         {
           transform: scale(1.2);
           transition-duration: 0.7s;
           border-color: blue;
       }
        select:hover
         {
           transform: scale(1.2);
           transition-duration: 0.7s;
           border-color: blue;
       }
*/
        .formgroup b
		{
			font-size: 20px;
		}
		.formgroup div{
			margin: 5px 8px;
		}
		.name input
		{
           margin-left:110px;
		}
		#gen
		{
          margin-left:105px;
        }

		.contact input
		{
           margin-left:70px;
		}
		.position select
		{
           margin-left:95px;
           width:150px;
           height: 30px;
           font-size: 15px;
           border-radius:5px;
           margin-top: 2px;
		}
       .email input
		{
           margin-left:113px;
           margin-top: px;
		}
        .organization input
        {
           margin-left:55px;
            margin-top: -2px;
        }
        .file input
        {
          margin: 15px;
           margin-left:150px;
        }
        .file input:hover
        {
            transform: scale(1.1);
            transition-duration: 0.3s;
        }
		.btn button
		{
			width: 200px;
			height:50px;
			margin-left: 138px;
			border-radius: 10px;
			font-size: 20px;
			color: black;
			cursor: pointer;
			transition-duration: 0.5s;
            margin-top:18px;
		}
		 .btn button:hover
         {
           transform: scale(1.2);
           border-style: solid;
           border-color: blue;
           background-color: black;
           color: blue;
       }
       .events
       {
        display: flex;
        flex-direction: row;
        margin-top:-30px !important;

       }
       .eventpart1 input
       {
        margin-left:150px;


       }
    

		</style>
</head>
<body>
        
    <?php include 'navbaar.php';?>

    <form class="regbox">
    <div class="formgroup">

              <h1>Register </h1>

                        <div class="name">
                           <b>Name:</b>
                            <input type="text" name="name" required>
                        </div>

                        <div class="gender">
                         <b>Gender:</b>
                         <input id="gen" type="radio" name="gender" value="male"> Male
                         <input id="gen1" type="radio" name="gender" value="female"> Female
                        </div>

                        <div class="file">
                        <b>ID:</b>
                        <input type="file" name="file" required>
                        </div>

                        <div class="add">
                        <b>Address:</b> 
                       <textarea name="add" type="textarea"></textarea>
                        </div>

                       <div class="contact"> 
                        <b>contact no:</b>
                        <input type="text" name="mobileno"  minlength="10" maxlength="10"required>
                       </div>

                         <div class="position">
                         <b>Position:</b>
                         <select name="position" >
                             <option>Student</option>
                             <option>Teacher</option>
                             <option>Employe</option>
                             <option>Investors</option>
                             <option>Entrepreneur</option>
                         </select>
                        </div>

                         <div class="email">
                          <b>Mail id:</b> 
                         <input type="email" name="email" required>
                         </div>

                          <div class="organization">
                          <b>Organization:</b>
                            <input type="text" name="nog" required>
                          </div>



                          

     <div class="btn">
	<button type="submit" name="btn">submit</button>
     </div>

</div>
</form>
    <?php include 'footer.php';?> 
</body>
 
</html>