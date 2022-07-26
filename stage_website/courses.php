<?php

 
    include 'connection_moodle.php';
    if($mysqli)
    {
                  $sql = "Select * from mdl_course WHERE format='topics' AND visible='1' AND category !='3' AND category !='5' AND category !='7'";
                //  $sql = "Select * from mdl_course WHERE  id in ('75','64','23','68','79','80','81')";
						
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

    

$title="COURSES";
ob_start();
?>
  <main>
            
            

            <!-- courses start -->
            <section class="courses_area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="masonry_active mb-40">
                                <button class="active" data-filter="*">all categories</button>
                                
								<?php 
								// 	$sql5 = "Select * from mdl_course_categories WHERE id !='3' AND id !='5'";
								// 			$row0 = mysqli_query($mysqli,$sql5);
								// 			while($row=mysqli_fetch_assoc($row0))
								// 			{
											 ?>
                                <!--<button data-filter=".<?php echo $row['id'];?>"><?php echo $row['name'];?></button>-->
								        	<?php 
								// 			}
											?>
								
								
								
                            </div>
                        </div>
                    </div>
                 

                    <div class="row grid">           
                           
                        <?php 
                                   

                                while($row=mysqli_fetch_assoc($result))
                                {
                                    // $img=$row['img'];
                                    $id=$row['id'];   
									$category=$row['category'];
									
									  
                                    // $id=$row['id']; 
                                    //   $name=$row['fullname']; 
                                        
                                      
                                      $sql22="SELECT * FROM `mdl_customfield_data` WHERE instanceid=$id";
                                      $result22 = mysqli_query($mysqli, $sql22);
                                      $row001=mysqli_fetch_assoc($result22);
                                      $contextid=$row001['contextid'];
                                      
								
								
				                     $sql33="SELECT * FROM `mdl_files` WHERE contextid=$contextid  AND filename!='.'";

                                     $result33 = mysqli_query($mysqli, $sql33);
                                    
                                    
                                    $row001=mysqli_fetch_assoc($result33);
                                    
                                    $file=$row001['filename'];  
                                    
                                    if($contextid && $file)
                                    {
                                        $img="https://stage.moodle.orena.solutions/pluginfile.php/$contextid/course/overviewfiles/$file'width='200' height='300'";
                                    }
                                    else
                                    {
                                        $img="https://png.pngtree.com/png-vector/20190120/ourlarge/pngtree-gallery-vector-icon-png-image_470660.jpg 'width='200' height='300'";
                                    }
                                    
						
								
                                 ?>
                                 
                                 
          
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat1 <?php echo $category; ?>">
                            <div class="course_single mb-30">
                                <div class="c_thumb">
                                    
                                    <a href="course_details.php?name=<?php echo $row['fullname'];?>&id=<?php echo $row['id'];?>"><?php print "<img src='$img'>" ;?></a></h3>
                                </div>
                                <div class="course_content">
                                    <div class="c_head">
                                        <span class="cat">
								
								       
								<!--// 			$sql6 = "Select * from mdl_course_categories WHERE id=$category";-->
								<!--// 			$row0 = mysqli_query($mysqli,$sql6);-->
								<!--// 			$cat= mysqli_fetch_assoc($row0);-->
								<!--// 			echo $cat['name']; -->
							        
							        	<?php	
										 $sql9 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='9'"; 
										 $result9 = mysqli_query($mysqli,$sql9);
                                         $row9=mysqli_fetch_assoc($result9);
                                       
                                         echo $Stream=$row9['value'];
										?>
										
										</span>
                                        <span class="price">
                                            <!--INR -->

											<?php 
								// 			$sql7 = "Select * from mdl_customfield_data WHERE instanceid=$id AND fieldid='6'";
								// 			$row1 = mysqli_query($mysqli,$sql7);
								// 			$datastok = mysqli_fetch_assoc($row1);
								// 			echo $datastok['value'];
											
											
											?>
                                                       
                                                     </span>
                                    </div>
                                    <h3 class="title">

                                        <a href="course_details.php?name=<?php echo $row['fullname'];?>&id=<?php echo $row['id'];?>"><?php echo $row['fullname']; ?></a></h3>
                                        
                                    <div class="rating_wrap ul_li">
                                        <!-- <span>13 votes</span> -->
                                        <ul class="rating_star ul_li">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa"></i></li>
                                        </ul>
                                    </div>
                                    <!--<ul class="c_bottom ul_li">-->
                                    <!--    <li><i class="fal fa-file-alt"></i>10</li>-->
                                    <!--    <li><i class="fal fa-user"></i>2k</li>-->
                                    <!--    <li><i class="fal fa-eye"></i>5k</li>-->
                                    <!--    <li>-->
                                    <!--        <div class="author">-->
                                    <!--            <img src="assets/img/course/c_author.png" alt="">-->
                                    <!--        </div>-->
                                    <!--    </li>-->
                                    <!--</ul>-->
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                    </div>
                    
                    <!--                     
                    <div class="row">
                        <div class="col-12">
                            <div class="load_more_btn text-center pt-10">
                                <a class="thm_btn thm_btn-white" href="courses.html">Load More <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div> -->

                </div>
            </section>
            <!-- courses end -->

 </main>
 <?php
$content=ob_get_contents();
ob_end_clean();
?>

<?php include 'template.php'?>