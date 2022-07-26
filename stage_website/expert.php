<!DOCTYPE html>
<html lang="en">
<head>
    


<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/datatables.mark.js/2.0.0/datatables.mark.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.min.css">





<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.jqueryui.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.0.0/js/dataTables.fixedColumns.min.js"></script>

<script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.js"></script>
<script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js)"></script>







    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 16px;
            color: #3a3131;
            background: #f7f7f7;
        }
        h2 {
            font-family: 'DM Serif Display', serif;
            font-weight: normal;
            color: #000;
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
        }
        table,th,td{
            
            border: 1px solid black;
            border-collapse: collapse;
            
            
        }
      
       
       
        
        button,.btn{
            background-color: #137449;
            font-size: 14px;
            margin: 3px;
            padding: 12px 25px;
            text-align: center;
            position: relative;
            color: #fefefe;
            text-transform: uppercase;
            font-weight: 600;
            border: 2px solid transparent;
        }
        

        button:hover,.btn:hover{
            cursor: pointer;
            color: #ffff;
            background-color: #233d63;
        }

        #select_all{
            cursor: pointer;
        }

        .space{
            white-space:pre-line;
        }
       
        .cname{
            width:200%;
            padding: 5px;
            

        }

        .dd{
            font-family: 'DM Serif Display', serif;
            color: #000;
            font-style: normal;
            font-weight:100;
            font-size: 110%;
            position: relative;
        }
        .f
        {
             background-color: coral;
             padding: 5px;
             /*height: 200px;*/
        }
            
.yellow {
  background-color: #b3d1ff;
}

.sticky-col {
  position: -webkit-sticky;
  position: sticky;
  background-color: white;
}

.first-col {
  width: auto;
  min-width: auto;
  max-width: auto;
  left: 0px;
}

.second-col {
  width: 150px;
  min-width: 150px;
  max-width: 150px;
  left: 100px;
}




.dropdown-check-list {
  display: inline-block;
}

.dropdown-check-list .anchor {
  position: relative;
  cursor: pointer;
  display: inline-block;
  padding: 5px 50px 5px 10px;
  border: 1px solid #ccc;
}

.dropdown-check-list .anchor:after {
  position: absolute;
  content: "";
  border-left: 2px solid black;
  border-top: 2px solid black;
  padding: 5px;
  right: 10px;
  top: 20%;
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

.dropdown-check-list .anchor:active:after {
  right: 8px;
  top: 21%;
}

.dropdown-check-list ul.items {
  padding: 2px;
  display: none;
  margin: 0;
  border: 1px solid #ccc;
  border-top: none;
}

.dropdown-check-list ul.items li {
  list-style: none;
}

.dropdown-check-list.visible .anchor {
  color: #0094ff;
}

.dropdown-check-list.visible .items {
  display: block;
}
tfoot {
    display: table-header-group;
}
 tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }      
    </style>
  <script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});


</script>
	
   
<title>Orena</title>
</head>

<body>
   
  <div><center><h3>Expert Data </h3></center></div>
  <div></div>

                

<form method="POST" action="moodle_user.php" id='sectionForm'>
    
<table id="example" class="display text-wrap" style="width:10%" >
<br>

		<thead style="position:sticky;top:0; background: #ffffff;  z-index: 3;">
		    <th>No</th>
			<th><input type="checkbox" id="select_all" /> Select all</li></th>
			<th>Date</th>
			<th style="position: sticky; left: 0; background: #ffffff; ">Expert_Name</th>
            <th>Personal_Email</th>
            <th>Work Email</th>
            <th>Contect Number</th>
            <th>Whatsapp Number</th>
            <th>Address</th>
            <th>Country</th>
            <th>State</th>
            <th>City</th>
            <th>Company/Institute Name</th>
            <th class="text-wrap" style="width: 2rem;" >Domain of Expertise</th>
            <th>Technical Skills(Technology)</th>
            <th>Technical Skills(Operating System)</th>
            <th>Technical Skills(Tools)</th>
            <th>Technical Skills(Hardware)</th>
            <th>Non-Technical Skills</th>
            <th>Mention other Non-Technical skills</th>
            <th>Expert Association As</th>
            <th>Mode</th>
            <th>Days</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Expected Fees Per Hour</th>
            <th>Consent Letter</th>
            <th>Expert Photo</th>
            <th>Profile Summary</th>
            <th>Name/Account Holder Name(To Be Printed On Cheque)</th>
            <th>Bank Name</th>
            <th>Account Name</th>
            <th>IFSC Code</th>
            <th>Display Data On Website</th>
			
			
			
			
		</thead>
		<tfoot style="position:sticky;top:10%; background: #ffffff;  z-index: 3; ">
            
            <th>No</th>
			<th><input type="checkbox" id="select_all" /> Select all</li></th>
			<th>Date</th>
			<th style="position: sticky; left: 0; z-index: ; background: #ffffff;"  >Expert_Name</th>
            <th>Personal_Email</th>
            <th>Work Email</th>
            <th>Contect Number</th>
            <th>Whatsapp Number</th>
            <th>Address</th>
            <th>Country</th>
            <th>State</th>
            <th>City</th>
            <th>Company/Institute Name</th>
            <th>Domain of Expertise</th>
            <th>Technical Skills(Technology)</th>
            <th>Technical Skills(Operating System)</th>
            <th>Technical Skills(Tools)</th>
            <th>Technical Skills(Hardware)</th>
            <th>Non-Technical Skills</th>
            <th>Mention other Non-Technical skills</th>
            <th>Expert Association As</th>
            <th>Mode></th>
            <th>Days></th>
            <th>Start Time></th>
            <th>End Time></th>
            <th>Expected Fees Per Hour</th>
            <th>Consent Letter/</th>
            <th>Expert Photo/</th>
            <th>Profile Summary</th>
            <th>Name/Account Holder Name(To Be Printed On Cheque)</th>
            <th>Bank Name</th>
            <th>Account Name</th>
            <th>IFSC Code</th>
            <th>Display Data On Website</th>
            
        </tfoot>
		<tbody>
 
			<?php
			error_reporting(0);
			include ('connection_moodle.php');
			$no=0;    
			   
				    $query=mysqli_query($mysqli,"select * from `expert`");
				    
				    while($row=mysqli_fetch_array($query)){
				   $no++;
				?>
				
					<tr>
					    
					    <td><?php echo $no; ?></td>
					    
					
            			<td><input  type="checkbox"  id="myCheck"  class="checkbox" value="<?php echo $row['id']; ?>" name="id[]"></td>
            			<td><?php echo $row['Date']; ?></td>
            			<td style="position: sticky; left: 0; z-index: 0; background: #ffffff;"  ><?php echo $row['Expert_Name']; ?></td>
                        <td><?php echo $row['Personal_Email']; ?></td>
                        <td><?php echo $row['Work Email']; ?></td>
                        <td><?php echo $row['Contect Number']; ?></td>
                        <td><?php echo $row['Whatsapp Number']; ?></td>
                        <td><?php echo $row['Address']; ?></td>
                        <td><?php echo $row['Country']; ?></td>
                        <td><?php echo $row['State']; ?></td>
                        <td><?php echo $row['City']; ?></td>
                        <td><?php echo $row['Compant/Institute Name']; ?></td>
                        <td ><?php echo $row['Domain of Expertise']; ?></td>
                        <td ><?php echo $row['Technical Skills(Technology)']; ?></td>
                        <td><?php echo $row['Technical Skills(Operating System)']; ?></td>
                        <td><?php echo $row['Technical Skills(Tools)']; ?></td>
                        <td><?php echo $row['Technical Skills(Hardware)']; ?></td>
                        <td><?php echo $row['Non-Technical Skills']; ?></td>
                        <td><?php echo $row['Mention other Non-Technical skills']; ?></td>
                        <td><?php echo $row['Expert Association As']; ?></td>
                        <td><?php echo $row['Mode']; ?></td>
                        <td><?php echo $row['Days']; ?></td>
                        <td><?php echo $row['Start Time']; ?></td>
                        <td><?php echo $row['End Time']; ?></td>
                        <td><?php echo $row['Expected Fees Per Hour']; ?></td>
                        <td>
                        
                        <?php  
						    $cl=$row['Consent Latter']; 
						 if (strpos($cl, "http") === 0) 
                        {
                            ?>
                            
                             <a href=" <?php echo $cl;?>"> <?php echo $cl; ?> &nbsp;<img src="https://cdn.pixabay.com/photo/2016/06/15/14/54/download-1459070_640.png" width="15" height="15"><br></a>
                             
                            <?php 
                        } 
                    else 
                        {
                           ?>
                           
                            <a href="https://orena.solutions/temp/<?php echo $cl; ?> "> https://orena.solutions/new/<?php echo $cl;?>  &nbsp;<img src="https://cdn.pixabay.com/photo/2016/06/15/14/54/download-1459070_640.png" width="15" height="15"></a>
                            
                            <?php 
                        }
                
                    ?>    
                        
                        
                        
                        </td>
                        <td>
                        
                         <?php  
						    $Ep=$row['Expert Photo']; 
						 if (strpos($Ep, "http") === 0) 
                        {
                            ?>
                            
                             <a href=" <?php echo $Ep;?>"> <?php echo $Ep; ?> &nbsp;<img src="https://cdn.pixabay.com/photo/2016/06/15/14/54/download-1459070_640.png" width="15" height="15"><br></a>
                             
                            <?php 
                        } 
                    elseif($Ep == '')
                    {
                        
                    }
                    else
                        {
                           ?>
                           
                            <a href="https://orena.solutions/temp/<?php echo $Ep; ?> "> https://orena.solutions/new/<?php echo $Ep;?>  &nbsp;<img src="https://cdn.pixabay.com/photo/2016/06/15/14/54/download-1459070_640.png" width="15" height="15"></a>
                            
                            <?php 
                        }
                
                    ?>    
                        
                        
                        </td>
                        <td>
                        
                         <?php  
						    $Ps=$row['Profile Summary']; 
						 if (strpos($Ps, "http") === 0) 
                        {
                            ?>
                            
                             <a href=" <?php echo $Ps;?>"> <?php echo $Ps; ?> &nbsp;<img src="https://cdn.pixabay.com/photo/2016/06/15/14/54/download-1459070_640.png" width="15" height="15"><br></a>
                             
                            <?php 
                        } 
                    else 
                        {
                           ?>
                           
                            <a href="https://orena.solutions/temp/<?php echo $Ps; ?> "> https://orena.solutions/new/<?php echo $Ps;?>  &nbsp;<img src="https://cdn.pixabay.com/photo/2016/06/15/14/54/download-1459070_640.png" width="15" height="15"></a>
                            
                            <?php 
                        }
                
                    ?>    
                        
                        </td>
                        <td><?php echo $row['Name/Account Holder Name(To Be Printed On Cheque)']; ?></td>
                        <td><?php echo $row['Bank Name']; ?></td>
                        <td><?php echo $row['Account Name']; ?></td>
                        <td><?php echo $row['IFSC Code']; ?></td>
                        <td><?php echo $row['Display Data ON Website']; ?></td>
						
					
						
					</tr>
				
					<?php
				}
			?>
        
		</tbody>
		</table>
		<br>
		
		

	<br>
	






    
  
    


</form>
</div>

   
	
 <script>
    $(document).ready(function() {
    $('#example').DataTable( {
         dom: 'Bfrtip',
        "bPaginate": false,
       
        
        
         buttons: [
           
             'excel'
            
            
        ],
       
        
        
        
    //   initComplete: function () {
    //         this.api().columns().every( function () {
    //             var column = this;
    //             var select = $('<select><option value=""></option></select>')
    //                 .appendTo( $(column.footer()).empty() )
    //                 .on( 'change', function () {
    //                     var val = $.fn.dataTable.util.escapeRegex(
    //                         $(this).val()
    //                     );
 
    //                     column
    //                         .search( val ? '^'+val+'$' : '', true, false )
    //                         .draw();
    //                 } );
 
    //             column.data().unique().sort().each( function ( d, j ) {
    //                 select.append( '<option value="'+d+'">'+d+'</option>' )
    //             } );
    //         } );
    //     }  
      initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }   
        
        
    } );
    
    
      $('#example tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    } );
 
    $('#button').click( function () {
        alert( table.rows('.selected').data().length +' row(s) selected' );
    } );
    
    
} );


$(".myTable").DataTable({
    mark: true
});
$.extend(true, $.fn.dataTable.defaults, {
    mark: true
});


var checkList = document.getElementById('list1');
checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
  if (checkList.classList.contains('visible'))
    checkList.classList.remove('visible');
  else
    checkList.classList.add('visible');
}

  


 </script>
 
<script type="text/Javascript">
   (function() {
    const form = document.querySelector('#sectionForm');
    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const checkboxLength = checkboxes.length;
    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

    function init() {
        if (firstCheckbox) {
            for (let i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener('change', checkValidity);
            }

            checkValidity();
        }
    }

    function isChecked() {
        for (let i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity() {
        const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

    init();
})();




$(' tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    
</script>
    
</body>
</html>


