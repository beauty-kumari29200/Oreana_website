<?php
    include 'connection_moodle.php'; 
    // moodle database connection
    if($mysqli)
    {
                  $sql = "Select * from mdl_page WHERE course='94'";
				  // facing page from blog course id=94	 	
    }
        
        $result = mysqli_query($mysqli, $sql);
            
            if ($result)
            {
                // $showAlert=true;
            }

        else

            {
            // $showError = "No";
            }

    ?>
<?php include "navbar.php" ?>
<head>
	<title>Instafeed on Your Website</title>
	<style type="text/css">
		a img{ 
			width: 25%;
		}
	</style>
</head>
  <main>
              
        <!-- Blog  start -->
            <section class="courses_area pt-120 pb-120">
                <h1 style='text-align: center;'>Blog</h1>
             <div class="container">
               
                    <div class="row">
                        
                    </div>
                 

                    <div class="row grid">           
                           
                        <?php 
                                   

                                while($row=mysqli_fetch_assoc($result))
                                {
                                   
                                    $name=$row['name'];
                                    // facing page name as BLog name	
								
                                 ?>
                           
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat1 <?php echo $category; ?>">
                            <div class="course_single mb-30">
                                 
                                 
                                <div class="c_thumb">
                                    <a href="blog_details.php?name=<?php echo $row['name'];?>&id=<?php echo $row['id'];?>"> <?php echo $row['intro'];?> </a></h3>
                                    <!-- page intro as imag and link -->
                                    
                                </div>
                                
                                <div class="course_content">
                                    
                                    <h3 class="title">
                                    <a href="blog_details.php?name=<?php echo $row['name'];?>&id=<?php echo $row['id'];?>"><?php echo $row['name']; ?></a></h3>
                                    <!-- blog_details page link -->
                                   
                                </div>
                                
                            </div>
                        </div>
                        
                    <?php  } ?>
                    </div>
                   

                </div>
            </section>
            <!-- Blog end -->




	<!--<h1 style="text-align: center">Instagram</h1>-->
 <!--   	<div id="instafeed-container"></div>-->



	<!--<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>-->
	<!--<script type="text/javascript">-->
	<!--var userFeed = new Instafeed({-->
	<!--	get: 'user',-->
	<!--	target: "instafeed-container",-->
 <!--   	resolution: 'low_resolution',-->
	<!--	accessToken: ''-->
	<!--});-->
	<!--userFeed.run();-->
	<!--</script>-->
	


 </main>

<?php include 'footer.php'?>